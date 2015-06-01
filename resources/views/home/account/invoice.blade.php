@extends('home')

@section('styles')
    <link href="{{ asset('css/tables.min.css') }}" rel="stylesheet">
@endsection


@section('content')

    <!--body wrapper start-->



                       <div class="panel">
                           <div class="panel-body invoice">
                               <div class="row">
                                   <div class="col-md-4 col-sm-4">
                                       <h1 class="invoice-title">invoice</h1>
                                   </div>
                                   <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                       <img class="inv-logo" src="images/invoice-logo.jpg" alt=""/>
                                       <p>121 King Street, Melbourne <br/>
                                           Victoria 3000 Australia <br/>
                                           Phone: +61 3 8376 6284</p>
                                   </div>
                               </div>
                               <div class="invoice-address">
                                   <div class="row">
                                       <div class="col-md-5 col-sm-5">
                                           <h4 class="inv-to">Invoice To</h4>
                                           <h2 class="corporate-id">Envato</h2>
                                           <p>
                                               121 King Street, Melbourne<br>
                                               Victoria 3000 Australia<br>
                                               Phone: +61 3 8376 6284,
                                               Email : info@envato.com
                                           </p>

                                       </div>
                                       <div class="col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3">
                                           <div class="inv-col"><span>Invoice#</span> 432134-A</div>
                                           <div class="inv-col"><span>Invoice Date :</span> 22 March 2014</div>
                                           <h1 class="t-due">TOTAL DUE</h1>
                                           <h2 class="amnt-value">$ 3120.00</h2>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <table class="table table-bordered table-invoice">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Item Description</th>
                                   <th class="text-center">Unit Cost</th>
                                   <th class="text-center">Quantity</th>
                                   <th class="text-center">Total</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>
                                       <h4>Service One</h4>
                                       <p>Service Four Description Lorem ipsum dolor sit amet.</p>
                                   </td>
                                   <td class="text-center"><strong>$ 599.00</strong></td>
                                   <td class="text-center"><strong>4</strong></td>
                                   <td class="text-center"><strong>$2396.00</strong></td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>
                                       <h4>Service Two</h4>
                                       <p>Service Four Description Lorem ipsum dolor sit amet.</p>
                                   </td>
                                   <td class="text-center"><strong>$ 599.00</strong>	</td>
                                   <td class="text-center"><strong>5</strong></td>
                                   <td class="text-center"><strong>$2995.00</strong></td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>
                                       <h4>Service Three</h4>
                                       <p>Service Four Description Lorem ipsum dolor sit amet.</p>
                                   </td>
                                   <td class="text-center"><strong>$ 599.00</strong>	</td>
                                   <td class="text-center"><strong>2</strong></td>
                                   <td class="text-center"><strong>$1198.00</strong></td>
                               </tr>
                               <tr>
                                   <td colspan="2" class="payment-method">
                                       <h4>Payment Method</h4>
                                       <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       <p>2. Pellentesque tincidunt pulvinar magna quis rhoncus.</p>
                                       <p>3. Cras rhoncus risus vitae congue commodo.</p>
                                       <br>
                                       <h3 class="inv-label">Thank you for your business</h3>
                                   </td>
                                   <td class="text-right" colspan="2">
                                       <p>Sub Total</p>
                                       <p>Tax (VAT 10%)</p>
                                       <p>Discount (5%)</p>
                                       <p><strong>GRAND TOTAL</strong></p>
                                   </td>
                                   <td class="text-center">
                                       <p>$ 6589.00</p>
                                       <p>$ 120.00</p>
                                       <p>$ 60.00</p>
                                       <p><strong>$ 5120.00</strong></p>
                                   </td>
                               </tr>

                               </tbody>
                           </table>
                       </div>
                       <div class="text-center ">
                           <a class="btn btn-success btn-lg"><i class="fa fa-check"></i> Submit Invoice </a>
                           <a class="btn btn-primary btn-lg" target="_blank" href="invoice_print.html"><i class="fa fa-print"></i> Print </a>
                       </div>



   <!--body wrapper end-->

@endsection

@section('scripts')
<script src="{{ asset('js/tables.min.js') }}"></script>
@endsection