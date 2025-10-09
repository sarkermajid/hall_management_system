<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyExpense;
use App\Models\DailyMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyExpenseController extends Controller
{
    public function DailyExpense()
    {
        $dailyExpenses = DailyExpense::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.daily_expense',compact('dailyExpenses'));
    }

    public function AddDailyExpense()
    {
        $dailyMarkets = DailyMarket::orderBy('created_at', 'desc')->get();
        return view('admin.add_daily_expense',compact('dailyMarkets'));
    }

    public function StoreDailyExpense(Request $request)
    {
        // Define the fields that are relevant to daily expenses
        $fields = [
            'chicken', 'tomato_sauce', 'chili_sauce', 'burger_bun', 'oil',
            'milk_powder', 'chicken_powder', 'garam_masala', 'butter', 'oregano',
            'sugar', 'vegetable', 'fish_sauce', 'bbq_sauce', 'soya_sauce',
            'cocoa_powder', 'choco_syrup', 'gas','electricity_bill','mushroom', 'black_olives',
            'sausage', 'chicken_ball', 'momo_sheet','chawmine',
            'pasta','oster','chart','k_m','conflower','f_fry','c_wings','potato',
            'vinegar','salt','c_fry','c_stacp','lemon','pudina','doi'
        ];

        // Set up validation rules dynamically
        $rules = collect($fields)->mapWithKeys(fn($field) => [
            "{$field}_q" => 'nullable|numeric|min:0'
        ])->toArray();
        $rules['daily_market_id'] = 'required|exists:daily_markets,id';
        $rules['date'] = 'required';
        $request->validate($rules);

        // Retrieve the relevant DailyMarket entry
        $dailyMarket = DailyMarket::find($request->daily_market_id);

        // Loop through the fields and subtract quantities if sufficient stock exists
        foreach ($fields as $field) {
            $quantityField = "{$field}_q";

            // Check if the quantity is provided in the request and if stock is sufficient
            if ($request->filled($quantityField)) {
                $requestedQuantity = (float) $request->$quantityField;
                $currentQuantity = (float) $dailyMarket->$quantityField;

                if ($currentQuantity >= $requestedQuantity) {
                    $dailyMarket->$quantityField = $currentQuantity - $requestedQuantity;
                } else {
                    // If stock is insufficient, redirect with a warning message
                    return redirect()->back()
                        ->with('warning', "Insufficient stock for {$field}!");
                }
            }
        }

        // Save the updated DailyMarket entry
        $dailyMarket->save();


        // Save the new daily expense record
        $dailyExpense = new DailyExpense();
        $totalPrice = 0;

        foreach ($fields as $field) {
            // Get price and quantity with fallback to 0 if not provided
            $price = $request->input("{$field}_p") ?? 0;
            $quantity = $request->input("{$field}_q") ?? 0;

            // Save price and quantity in the model
            $dailyExpense->{"{$field}_p"} = $price;
            $dailyExpense->{"{$field}_q"} = $quantity;

            $totalPrice += $price;
        }

        $dailyExpense->daily_market_id = $request->input('daily_market_id');
        $dailyExpense->total_price = $totalPrice;
        $dailyExpense->date = $request->input('date');
        $dailyExpense->save();

        return redirect()->route('admin.daily.expense')->with('success', 'Daily Expenses Saved Successfully!');

    }

    public function DeleteDailyExpense($id)
    {
        $dailyExpense = DailyExpense::find($id);
        $dailyExpense->delete();
        return redirect()->route('admin.daily.expense')->with('success', 'Daily Expenses Deleted Successfully!');
    }

    public function ViewDailyExpense($id)
    {
        $dailyExpense = DailyExpense::find($id);
        return view('admin.view_daily_expense',compact('dailyExpense'));
    }
}
