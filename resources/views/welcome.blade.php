<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $name }}</title>
        <style>
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            h1,h2,h3,h4,h5,h6,p,span,div { 
                font-family: DejaVu Sans; 
                font-size:10px;
                font-weight: normal;
            }

            th,td { 
                font-family: DejaVu Sans; 
                font-size:10px;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }

            .panel-default {
                border-color: #ddd;
            }

            .panel-body {
                padding: 15px;
            }

            table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 0px;
                border-spacing: 0;
                border-collapse: collapse;
                background-color: transparent;

            }

            thead  {
                text-align: left;
                display: table-header-group;
                vertical-align: middle;
            }

            th, td  {
                border: 1px solid #ddd;
                padding: 6px;
            }

            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
        </style>
        @if( $name)
            <style>
                @page { margin-top: 140px;}
                header {
                    top: -100px;
                    position: fixed;
                }
            </style>
        @endif
    </head>
    <body>
        <header>
            <div style="position:absolute; left:0pt; width:250pt;">
                <img class="img-rounded" height="{{  $name }}" src="{{  $name }}">
            </div>
            <div style="margin-left:300pt;">
                <b>Data: </b> {{ now()->format('d-m-Y') }}<br />
                @if ( $name)
                    <b>Due date: </b>{{  $name }}<br />
                @endif
                @if ( $name)
                    <b>Invoice #: </b> {{  $name }}
                @endif
                <br />
            </div>
            <br />
            <h2>{{  $name }} {{  $name ? '#' .  $name : '' }}</h2>
        </header>
        <main>
            <div style="clear:both; position:relative;">
                <div style="position:absolute; left:0pt; width:250pt;">
                    <h4>Business Details:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $name}}
                            {{  $name }}<br />
                            ID: {{  $name }}<br />
                            {{  $name }}<br />
                            {{  $name }}<br />
                            {{  $name }} {{  $name }}
                            {{  $name }}<br />
                        </div>
                    </div>
                </div>
                <div style="margin-left: 300pt;">
                    <h4>Customer Details:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $name}}
                            {{  $name }}<br />
                            ID: {{  $name }}<br />
                            {{  $name }}<br />
                            {{  $name }}<br />
                            {{  $name }} {{  $name }}
                            {{  $name }}<br />
                        </div>
                    </div>
                </div>
            </div>
            <h4>Items:</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        @if( $name <> null)
                            <th>Image</th>
                        @endif
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($invoice->items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @if($invoice->shouldDisplayImageColumn())
                                <td>@if(!is_null($item->get('imageUrl'))) <img src="{{ url($item->get('imageUrl')) }}" />@endif</td>
                            @endif
                            <td>{{ $item->get('id') }}</td>
                            <td>{{ $item->get('name') }}</td>
                            <td>{{ $item->get('price') }} {{ $invoice->formatCurrency()->symbol }}</td>
                            <td>{{ $item->get('ammount') }}</td>
                            <td>{{ $item->get('totalPrice') }} {{ $invoice->formatCurrency()->symbol }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            <div style="clear:both; position:relative;">
                {{-- @if($invoice->notes)
                    <div style="position:absolute; left:0pt; width:250pt;">
                        <h4>Notes:</h4>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {{ $invoice->notes }}
                            </div>
                        </div>
                    </div>
                @endif --}}
                <div style="margin-left: 300pt;">
                    <h4>Total:</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><b>Subtotal</b></td>
                                <td>{{  $name }} {{  $name }}</td>
                            </tr>
                            {{-- @foreach( $name as $nam)
                                <tr>
                                    <td>
                                        <b>
                                            <!--{{ $tax_rate['name'].' '.($tax_rate['tax_type'] == 'percentage' ? '(' . $tax_rate['tax'] . '%)' : '') }}
                                        </b>
                                    </td>
                                    <td>{{ $invoice->taxPriceFormatted((object)$tax_rate) }} {{ $invoice->formatCurrency()->symbol }}</td>-->
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td><b>TOTAL</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @if ( $name)
                <br /><br />
                <div class="well">
                    {{  $name}}
                </div>
            @endif
        </main>

        <!-- Page count -->
        <script type="text/php">
            if (isset($pdf) && $GLOBALS['with_pagination'] && $PAGE_COUNT > 1) {
                $pageText = "{PAGE_NUM} of {PAGE_COUNT}";
                $pdf->page_text(($pdf->get_width()/2) - (strlen($pageText) / 2), $pdf->get_height()-20, $pageText, $fontMetrics->get_font("DejaVu Sans, Arial, Helvetica, sans-serif", "normal"), 7, array(0,0,0));
            }
        </script>
    </body>
</html>
