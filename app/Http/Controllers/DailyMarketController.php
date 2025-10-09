<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyMarket;
use Illuminate\Http\Request;

class DailyMarketController extends Controller
{
    public function DailyMarket()
    {
        $dailyMarkets = DailyMarket::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.daily_market',compact('dailyMarkets'));
    }

    public function AddDailyMarket()
    {
        return view('admin.add_daily_market');
    }

    public function StoreDailyMarket(Request $request)
    {
        $fields = [
            'chicken', 'tomato_sauce', 'chili_sauce', 'burger_bun', 'oil',
            'milk_powder', 'chicken_powder', 'garam_masala', 'butter', 'oregano',
            'sugar', 'vegetable', 'fish_sauce', 'bbq_sauce', 'soya_sauce',
            'cocoa_powder', 'choco_syrup', 'gas', 'electricity_bill', 'rent',
            'mushroom', 'black_olives', 'sausage', 'chicken_ball',
            'momo_sheet','chawmine','pasta','oster','chart','k_m','conflower','f_fry','c_wings',
            'potato','vinegar','salt','c_fry','c_stacp','lemon','pudina','doi','transport'
        ];

        // Build validation rules dynamically for each item
        $rules = [];
        foreach ($fields as $field) {
            $rules["{$field}_p"] = 'nullable|numeric';
            $rules["{$field}_q"] = 'nullable|numeric';
        }
        $rules['date'] = 'required';

        $request->validate($rules);

        $marketList = new DailyMarket();
        $totalPrice = 0;

        foreach ($fields as $field) {
            // Get price and quantity with fallback to 0 if not provided
            $price = $request->input("{$field}_p") ?? 0;
            $quantity = $request->input("{$field}_q") ?? 0;

            // Save price and quantity in the model
            $marketList->{"{$field}_p"} = $price;
            $marketList->{"{$field}_q"} = $quantity;

            $totalPrice += $price;
        }

        $marketList->total_price = $totalPrice;
        $marketList->date = $request->input('date');
        $marketList->save();

        // Redirect back with a success message
        return redirect()->route('admin.daily.market')->with('success', 'Market list saved successfully!');
    }

    public function EditDailyMarket($id)
    {
        $dailyMarket = DailyMarket::find($id);
        return view('admin.edit_daily_market',compact('dailyMarket'));
    }

    public function UpdateDailyMarket(Request $request, $id)
    {
        $fields = [
            'chicken', 'tomato_sauce', 'chili_sauce', 'burger_bun', 'oil',
            'milk_powder', 'chicken_powder', 'garam_masala', 'butter', 'oregano',
            'sugar', 'vegetable', 'fish_sauce', 'bbq_sauce', 'soya_sauce',
            'cocoa_powder', 'choco_syrup', 'gas', 'electricity_bill', 'rent',
            'mushroom', 'black_olives', 'sausage', 'chicken_ball',
            'momo_sheet','chawmine','pasta','oster','chart','k_m','conflower','f_fry','c_wings',
            'potato','vinegar','salt','c_fry','c_stacp','lemon','pudina','doi','transport'
        ];

        // Build validation rules dynamically for each item
        $rules = [];
        foreach ($fields as $field) {
            $rules["{$field}_p"] = 'nullable|integer';
            $rules["{$field}_q"] = 'nullable|integer';
        }
        $rules['date'] = 'nullable';

        $request->validate($rules);

        // Find the DailyMarket entry to update
        $marketList = DailyMarket::findOrFail($id);
        $totalPrice = 0;

        foreach ($fields as $field) {
            // Get price and quantity with fallback to 0 if not provided
            $price = $request->input("{$field}_p") ?? 0;
            $quantity = $request->input("{$field}_q") ?? 0;

            // Update price and quantity in the model
            $marketList->{"{$field}_p"} = $price;
            $marketList->{"{$field}_q"} = $quantity;

            $totalPrice += $price;
        }

        $marketList->total_price = $totalPrice;
        $marketList->date = $request->input('date');
        $marketList->save();

        // Redirect back with a success message
        return redirect()->route('admin.daily.market')->with('success', 'Market list updated successfully!');
    }


    public function ViewDailyMarket($id)
    {
        $dailyMarket = DailyMarket::find($id);
        return view('admin.view_daily_market',compact('dailyMarket'));
    }

    public function DeleteDailyMarket($id)
    {
        $dailyMarket = DailyMarket::find($id);
        $dailyMarket->delete();
        return redirect()->route('admin.daily.market')->with('success', 'Daily market deleted successfully!');
    }
}
