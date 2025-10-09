<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyExpense;
use App\Models\DailyProfit;
use App\Models\DailySell;
use Illuminate\Http\Request;

class DailyProfitController extends Controller
{
    public function DailyProfit()
    {
        $dailySells = DailySell::orderBy('created_at', 'desc')->get();
        $dailyExpenses = DailyExpense::orderBy('created_at', 'desc')->get();
        $dailyProfits = DailyProfit::orderBy('created_at', 'desc')->get();
        return view('admin.daily_profit',compact('dailySells','dailyExpenses','dailyProfits'));
    }

    public function CalculateDailyProfit(Request $request)
    {
        $dailySell = DailySell::find($request->daily_sell_id);
        $dailyExpense = DailyExpense::find($request->daily_expense_id);
        $profit = $dailySell->total_price - $dailyExpense->total_price;

        $dailyProfit = new DailyProfit();
        $dailyProfit->date = $request->date;
        $dailyProfit->profit = $profit;
        $dailyProfit->save();
        return redirect()->back()->with('success', 'Daily Profit Calculated successfully!');
    }

    public function DeleteDailyProfit($id)
    {
        $dailyProfit = DailyProfit::find($id);
        $dailyProfit->delete();
        return redirect()->back()->with('success', 'Daily Profit deleted successfully!');
    }
}
