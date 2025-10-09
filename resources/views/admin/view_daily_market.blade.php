@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Daily Market</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-5">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Date :</strong></td>
                                <td class="text-style">{{ $dailyMarket->date }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Tomato Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->tomato_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Tomato Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->tomato_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chili Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chili_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chili Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chili_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Burger Bun Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->burger_bun_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Burger Bun Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->burger_bun_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oil Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->oil_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oil Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->oil_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Milk Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->milk_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Milk Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->milk_powder_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_powder_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Garam Masala Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->garam_masala_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Garam Masala Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->garam_masala_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Butter Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->butter_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Butter Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->butter_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oregano Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->oregano_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oregano Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->oregano_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sugar Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->sugar_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sugar Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->sugar_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vegetable Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->vegetable_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vegetable Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->vegetable_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fish Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->fish_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fish Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->fish_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->bbq_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->bbq_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Soya Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->soya_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Soya Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->soya_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cocoa Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->cocoa_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cocoa Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->cocoa_powder_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Choco Syrup Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->choco_syrup_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Choco Syrup Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->choco_syrup_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Gas Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->gas_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Gas Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->gas_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Electricity Unit :</strong></td>
                                <td class="text-style">{{ $dailyMarket->electricity_bill_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Electricity Bill :</strong></td>
                                <td class="text-style">{{ $dailyMarket->electricity_bill_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->mushroom_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->mushroom_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Black Olives Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->black_olives_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Black Olives Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->black_olives_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sausage Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->sausage_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sausage Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->sausage_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Ball Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_ball_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Ball Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_ball_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Momo Sheet Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->momo_sheet_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Momo Sheet Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->momo_sheet_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chawmine Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->chawmine_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chawmine Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chawmine_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Pasta Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->pasta_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Pasta Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->pasta_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oster Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->oster_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oster Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->oster_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chart Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->chart_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chart Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chart_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Kashmiri Red Chilli Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->k_m_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Kashmiri Red Chilli Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->k_m_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Conflower Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->conflower_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Conflower Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->conflower_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>French Fry Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->f_fry_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>French Fry Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->f_fry_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Wings Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_wings_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Wings Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_wings_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Potato Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->potato_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Potato Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->potato_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vinegar Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->vinegar_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vinegar Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->vinegar_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Salt Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->salt_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Salt Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->salt_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Fry Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_fry_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Fry Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_fry_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Stacp Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_stacp_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Stacp Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_stacp_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Lemon Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->lemon_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Lemon Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->lemon_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Pudina Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->pudina_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Pudina Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->pudina_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Doi Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->doi_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Doi Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->doi_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Transport Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->transport_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Transport Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->transport_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Rent Bill :</strong></td>
                                <td class="text-style">{{ $dailyMarket->rent_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Total Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
