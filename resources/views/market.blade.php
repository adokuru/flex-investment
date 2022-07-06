@extends('layouts.public')
@section('title', 'Welcome')
@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                    <div class="uk-width-1-1">
                        <h1 class="uk-margin-remove">Today's
                            <span class="in-highlight">Cryptocurrency</span> Prices by Market Cap.
                        </h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                        <p>The global crypto market cap</p>
                    </div>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "490",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <i class="fas fa-money-bill-wave fa-2x in-icon-wrap large primary-color uk-margin-right"></i>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Why trade with CMC markets?</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation repudiandae ullamco.</p>
                                <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-2@m in-margin-bottom-30@s" data-uk-grid>
                                    <div>
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Direct Market Access (DMA)</li>
                                            <li>Leverage up to 1:500</li>
                                            <li>T+0 settlement</li>
                                            <li>Dividends paid in cash</li>
                                        </ul>
                                    </div>
                                    <div class="in-margin-small-top@s in-margin-bottom@s">
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Free from UK Stamp Duty</li>
                                            <li>Short selling available</li>
                                            <li>Commissions from 0.08%</li>
                                            <li>Access to 1500 global shares</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <h3>Check out our Shares offer</h3>
                        <table class="uk-table uk-table-divider uk-table-striped uk-text-small uk-text-center">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">Name</th>
                                    <th class="uk-text-center">Initial Deposit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Apple Inc CFD</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Alibaba CFD</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Facebook CFD</td>
                                    <td>10%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="uk-text-small"><a href="#">See Full Shares Table</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3>Get up to $600 plus 60 days of commission-free stocks &amp; forex trades</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="#">Open an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
