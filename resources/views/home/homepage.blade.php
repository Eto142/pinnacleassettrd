@include('home.header')










<main class="home-pg">
    <section id="homepagecarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators per regulator -->
        <div class="carousel-indicators com-host">
           
                <button type="button" data-bs-target="#homepagecarousel" data-bs-slide-to="26" aria-label="Slide 27" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#homepagecarousel" data-bs-slide-to="25" aria-label="Slide 25"></button>
                <button type="button" data-bs-target="#homepagecarousel" data-bs-slide-to="24" aria-label="Slide 24"></button>
                <!-- 
                    <button type="button" data-bs-target="#homepagecarousel" data-bs-slide-to="17"  aria-label="Slide 17"></button>
                
                 
                <button type="button" data-bs-target="#homepagecarousel" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
                               
            
        </div>
        <div class="carousel-inner">
            <!-- Carousel inner content per regulator -->
             
                <div class="carousel-item item-27 active">
                    <div class="carousel-caption">
                        <h2>They’re Fast,</h2>                            
                        <h1 class="mb-4">We’re Faster</h1>
                        <a href="{{route('register')}}" class="btn btn-primary">View More</a>
                    </div>
                </div>
                <div class="carousel-item item-25">
                    <div class="carousel-caption">
                        <h1>Trade the World’s Biggest Stocks</h1>
                        <h4 class="mb-4">Access NVDA, GOOG and AMZN Stock CFDs</h4>
                        <a href="{{route('register')}}" class="btn btn-primary">Sign up</a>
                    </div>
                </div>

                <div class="carousel-item item-24">
                    <div class="carousel-caption">
                        <span class="px-5 px-md-0">
                            <img class="img-fluid mb-3 mb-md-5" src="https://www.icmarkets.com/assets/images/tradingview-logo.webp" alt="" />
                        </span>
                        <img class="img-fluid mb-2 mb-md-5" src="https://www.icmarkets.com/assets/images/tradingview-icon.webp" alt="" />
                        <h1 class="mb-2 mb-md-5">Chart, Connect, and Trade</h1>
                        <a href="{{route('register')}}" class="btn btn-primary">Join Now</a>
                    </div>
                </div>
                <!-- 
                
                <div class="carousel-item item-17">
                    <div class="carousel-caption">
                        <h1>Trade Forex CFDs from 0.0 pips</h1>
                        <h4 class="mb-4"></h4>
                        <a href="/global/en/open-trading-account/live" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                

                 

                <div class="carousel-item item-8">
                    <div class="carousel-caption">                       
                        <img src="/assets/images/trustpilot-icon.webp" alt="" class="img-fluid mb-4" />                       
                        <h1>A Top-Rated Choice on Trustpilot</h1>
                        <h4 class="mb-4">“Quick response, very helpful and patient.” — Huong, 2023</h4>
                        <a href="/global/en/open-trading-account/live" class="btn btn-primary">Join Now</a>
                    </div>
                </div>
             -->
        </div>
    </section>
    
        <section class="counter-sec d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <span>0.0</span>
                                Pip Spreads*
                            </li>
                            <li>
                                <span>1:
                                    
                                        1000
                                    
                                </span>
                                Leverage
                            </li>
                            <li>
                                <span>0.01</span>
                                Micro Lot Trading
                            </li>
                            <li>
                                <span>+2250</span>
                                Tradable Instruments
                            </li>
                            <li>
                                
                                    <span>24/7</span>
                                
                                DEDICATED SUPPORT
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="raw-chart-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="quotes-wrap" class="d-none d-md-block mt-3 quotes-wrap">
                        <div data-id="EURUSD" data-format="15" class="quote-widget widget-1 format-1-5 price-up">
                            <div class="quote-widget__header">
                                <div class="quote-widget__header-symbol">EURUSD</div>
                                <div class="quote-widget__header-change">+0.04%</div>
                            </div>
                            <div class="quote-widget__content">
                                <div class="quote-widget__content-bid">
                                    <div class="quote-widget__content-title">
                                        Bid
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1.16</span><span class="price-2">69</span><span class="price-3">2</span></div>
                                </div>
                                <div class="quote-widget__content-ask">
                                    <div class="quote-widget__content-title">
                                        Ask
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1.16</span><span class="price-2">69</span><span class="price-3">2</span></div>
                                </div>
                            </div>

                            <div class="quote-widget__footer">
                                <div class="quote-widget__footer-spread"><span class="spread-label">Spread</span><span class="spread-value">0.0</span></div>
                                <div class="quote-widget__footer-buttons">
                                    <div class="f-btn buy"><a id="home_live_registration_3" href="{{route('register')}}">BUY</a></div>
                                    <div class="f-btn sell"><a id="home_live_registration_4" href="{{route('register')}}">SELL</a></div>
                                </div>
                            </div>
                        </div>
                        <div data-id="AUDUSD" data-format="15" class="quote-widget widget-2 format-1-5 price-down">
                            <div class="quote-widget__header">
                                <div class="quote-widget__header-symbol">AUDUSD</div>
                                <div class="quote-widget__header-change">+0.44%</div>
                            </div>
                            <div class="quote-widget__content">
                                <div class="quote-widget__content-bid">
                                    <div class="quote-widget__content-title">
                                        Bid
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">0.75</span><span class="price-2">40</span><span class="price-3">0</span></div>
                                </div>
                                <div class="quote-widget__content-ask">
                                    <div class="quote-widget__content-title">
                                        Ask
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">0.75</span><span class="price-2">40</span><span class="price-3">0</span></div>
                                </div>
                            </div>
                            <div class="quote-widget__footer">
                                <div class="quote-widget__footer-spread"><span class="spread-label">Spread</span><span class="spread-value">0.0</span></div>
                                <div class="quote-widget__footer-buttons">
                                    <div class="f-btn buy"><a id="home_live_registration_5" href="{{route('register')}}">BUY</a></div>
                                    <div class="f-btn sell"><a id="home_live_registration_6" href="{{route('register')}}">SELL</a></div>
                                </div>
                            </div>
                        </div>
                        <div data-id="GBPUSD" data-format="15" class="quote-widget widget-3 format-1-5 price-down">
                            <div class="quote-widget__header">
                                <div class="quote-widget__header-symbol">GBPUSD</div>
                                <div class="quote-widget__header-change">+0.19%</div>
                            </div>
                            <div class="quote-widget__content">
                                <div class="quote-widget__content-bid">
                                    <div class="quote-widget__content-title">
                                        Bid
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1.32</span><span class="price-2">58</span><span class="price-3">4</span></div>
                                </div>
                                <div class="quote-widget__content-ask">
                                    <div class="quote-widget__content-title">
                                        Ask
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1.32</span><span class="price-2">59</span><span class="price-3">1</span></div>
                                </div>
                            </div>
                            <div class="quote-widget__footer">
                                <div class="quote-widget__footer-spread"><span class="spread-label">Spread</span><span class="spread-value">0.7</span></div>
                                <div class="quote-widget__footer-buttons">
                                    <div class="f-btn buy"><a id="home_live_registration_7" href="{{route('register')}}">BUY</a></div>
                                    <div class="f-btn sell"><a id="home_live_registration_8" href="{{route('register')}}">SELL</a></div>
                                </div>
                            </div>
                        </div>
                        <div data-id="XAUUSD" data-format="42" class="quote-widget widget-4 format-4-2 price-up">
                            <div class="quote-widget__header">
                                <div class="quote-widget__header-symbol">XAUUSD</div>
                                <div class="quote-widget__header-change">+0.35%</div>
                            </div>
                            <div class="quote-widget__content">
                                <div class="quote-widget__content-bid">
                                    <div class="quote-widget__content-title">
                                        Bid
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1298.</span><span class="price-2">21</span><span class="price-3"></span></div>
                                </div>
                                <div class="quote-widget__content-ask">
                                    <div class="quote-widget__content-title">
                                        Ask
                                    </div>
                                    <div class="quote-widget__content-price"><span class="price-1">1298.</span><span class="price-2">28</span><span class="price-3"></span></div>
                                </div>
                            </div>
                            <div class="quote-widget__footer">
                                <div class="quote-widget__footer-spread"><span class="spread-label">Spread</span><span class="spread-value">0.7</span></div>
                                <div class="quote-widget__footer-buttons">
                                    <div class="f-btn buy"><a id="home_live_registration_9" href="{{route('register')}}">BUY</a></div>
                                    <div class="f-btn sell"><a id="home_live_registration_10" href="{{route('register')}}">SELL</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">The Raw Spread Advantage</h1>
                    
                        <p class="fw-400 text-white-50 lead-3 mb-4">Raw Spreads are the difference you have been waiting for. Trade with spreads from 0.0 pips, no requotes, best possible prices and no restrictions. Pinnacle Assets Trade is the multi-asset trading platform of choice for high volume traders, scalpers and robots.<br><br>&nbsp;</p>
                    
                    <div class="btn-flex">
                        <a class="btn btn-primary me-3" href="{{route('register')}}">Start Trading</a>
                        <a class="btn btn-outline-primary" href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <section class="spread-steps-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card steps-card pb-0 pb-md-4">
                            <h2>Spreads from 0.0 pips</h2>
                            <ul class="list">
                                <!-- <li>Pinnacle Assets Trade EURUSD Avg spread of 0.1 is one of the best in the world**</li> -->
                                <li>Raw spreads means really from 0.0 pips*</li>
                                <li>Our diverse and proprietary liquidity mix keeps spreads tight 24/5</li>
                            </ul>
                            <a class="btn btn-secondary" id="home_trading_pricing_spreads_1" href="{{url('spreads')}}">
                                Pricing Overview
                            </a>
                            <div class="card-img-block d-block d-md-none">
                                
                                    <img class="img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-mbl-01.webp" alt="" />
                                
                            </div>
                            <div class="card-right-bg">
                                
                                    <img class="d-none d-md-block img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-01-fsa.webp" alt="" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card steps-card">
                            <h2>
                                
                                    Fast Order Execution
                                
                            </h2>
                            <ul class="list">
                                <li>Average execution speeds of under 40ms***</li>
                                <li>Low latency fibre optic and Equinix NY4 server</li>
                                <li>Free Low latency collocated VPS available</li>
                            </ul>
                            
                                <a class="btn btn-secondary" id="home_trading_pricing_spreads_2" href="{{url('virtual-private-server')}}">
                                    Get your Free VPS
                                </a>
                            
                            <div class="card-right-bg">
                                <img class="img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-02.webp" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card steps-card">
                            <h2>Institutional Grade Trading</h2>
                            <ul class="list">
                                
                                    <li>Real, deep and diverse liquidity you can trade on</li>
                                
                                <li>Reduced slippage</li>
                                
                                    <li>Over 29 Billion USD in FX trades processed daily</li>
                                
                            </ul>
                            <a class="btn btn-secondary" id="home_trading_pricing_spreads_3" href="{{url('spreads')}}">
                                Raw Pricing Benefits
                            </a>
                            <div class="card-right-bg">
                                <img class="img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-03.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
            <section class="strength-sec">
                <div class="container">
                    <div class="row">
                        
                                <div class="col-md-6 order-1 order-md-0">
                                    <ul class="strength-list">
                                        <li>
                                            <h1>US$1.39 Trillion</h1>
                                            <span>Trading volume - June 2023</span>
                                        </li>
                                        <li>
                                            <h1>200,000+</h1>
                                            <span>Active Clients Worldwide</span>
                                        </li>
                                        <li>
                                            <h1>Excellent 4.8/5</h1>
                                            <span>Rating on TrustPilot</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 pt-md-4 order-0 order-md-1">
                                    <h2 class="text-white mb-4">Give your automated trading system the edge</h2>
                                    <p class="fw-400 text-white-50 lead-3 mb-4">Pinnacle Assets Trade is the one of the top choices for automated traders. Our order matching engine located in the New York Equinix NY4 data centre processes over 500,000 trades per day with over two thirds of all trades coming from automated trading systems.</p>
                                </div> 
                           
                    </div>
                </div>
            </section>
        
        <section class="spread-steps-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card steps-card mh-auto">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2>
                                        
                                            Powerful Trading Terminals
                                        
                                    </h2>
                                    <ul class="logo-list" style="max-width: 340px; gap: 20px 0;">
                                        <li><img class="img-fluid" src="https://www.icmarkets.com/assets/images/meta-trader4.webp" alt=""></li>
                                        <li><img class="img-fluid" src="https://www.icmarkets.com/assets/images/meta-trader5.webp" alt=""></li>
                                        
                                            <li><img class="img-fluid" src="https://www.icmarkets.com/assets/images/ctrader.webp" alt=""></li>
                                        
                                        
                                            <li><img class="img-fluid" src="https://www.icmarkets.com/assets/images/tradingview.webp" alt=""></li>
                                        
                                    </ul>
                                    <ul class="list list-inline">
                                        <li class="w-lg-25">Windows</li>
                                        <li class="w-lg-25">Web Browser</li>
                                        <li class="w-lg-25">Android</li>
                                        <li class="w-lg-25">MAC</li>
                                        <li class="w-lg-25">iOS</li>
                                    </ul>
                                    <a class="btn btn-secondary" id="home_metatrader_5" href="{{url('metatrader-5')}}">
                                        Platforms
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <figure class="mt-4 mt-md-0 d-none d-md-block">
                                        <img class="img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-04.webp" alt="" />
                                    </figure>
                                    <figure class="mt-4 mt-md-0 d-block d-md-none">
                                        <img class="img-fluid" src="https://www.icmarkets.com/assets/images/spread-step-mbl-04.webp" alt="" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card steps-card mh-auto mb-0">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-1 order-lg-0">
                                    <figure class="mt-4 mt-md-0 d-none d-md-block">
                                        <img src="https://www.icmarkets.com/assets/images/spread-step-05.webp" alt="" class="img-fluid">
                                    </figure>
                                    <figure class="mt-4 mt-md-0 d-block d-md-none">
                                        <img src="https://www.icmarkets.com/assets/images/spread-step-mbl-05.webp" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h2>
                                        
                                                Global Markets at<br class="d-none d-md-block"/>
                                        
                                        Your Fingertips
                                    </h2>
                                    <ul class="list list-inline mb-4">
                                        <li class="w-lg-25 fw-700">Forex CFDs <span>61 products</span></li>
                                        <li class="w-lg-25 fw-700">Commodities CFDs <span>24 products</span></li>
                                        <li class="w-lg-25 fw-700">Stocks CFDs <span>+2100 products</span></li>
                                        <li class="w-lg-25 fw-700">Index CFDs <span>25 products</span></li>
                                        <li class="w-lg-25 fw-700">Bond CFDs <span>9 products</span></li>
                                        <li class="w-lg-25 fw-700 text-nowrap">Cryptocurrency CFDs <span>21 products</span></li>
                                    </ul>
                                    <a class="btn btn-secondary" id="home_trading_markets_range_of_markets" href="{{url('range-of-markets')}}">
                                        Range of Markets
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
            <section class="strength-sec before-bg-right">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pe-md-3">
                            <!-- <h6>
                                <a class="fw-700 text-decoration-none" id="home_live_registration_1" href="/global/en/open-trading-account/live">
                                    Why IC Markets
                                </a>
                            </h6> -->
                            <h2 class="text-white mb-4">Our strength is in the numbers<!-- Strength --></h2>
                            <p class="fw-400 text-white lead-3 mb-4">Pinnacle Assets Trade is one of the largest Forex CFD providers in the world by trading volume.</p>
                            <div class="btn-flex">
                                <a class="btn btn-primary me-3" href="{{route('register')}}">Start Trading</a>
                                <a class="btn btn-outline-primary" href="{{route('login')}}">Login</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="strength-list">
                                <li>
                                    <h1>500,000</h1>
                                    <span>Trades Per Day</span>
                                </li>
                                <li>
                                    <h1>Equinix NY4</h1>
                                    <span>Trading Hub at New York</span>
                                </li>
                                <li>
                                    <h1>60%</h1>
                                    <span>Algo trades (% of all trades)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        
        <section class="spread-steps-sec ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card steps-card mh-auto mb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Your money, your way</h2>
                                    <ul class="list list-inline mb-2">
                                        <li>Instant Deposit</li>
                                        <li>Fast Withdrawal</li>
                                        <li>0% Commission</li>
                                    </ul>
                                    <a class="btn btn-secondary mb-3" id="home_trading_accounts_funding" href="{{url('funding')}}">
                                        Payment methods
                                    </a>
                                    <p class="footnote text-nowrap">For more information on deposits, withdrawals and how to fund your trading account, <a class="dark-link" href="{{url('funding')}}">Go here</a></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/visa-logo.webp" alt="" /></span>
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/mastercard-logo.webp" alt="" /></span>
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/paypal-logo.webp" alt="" /></span>
                                    </div>
                                    <div class="row">
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/neteller-logo.webp" alt="" /></span>
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/skrill-logo.webp" alt="" /></span>
                                        <span class="col-4 funding"><img class="img-fluid" src="https://www.icmarkets.com/assets/images/wiretransfer-logo.webp" alt="" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="regsteps-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Open an account in 4 simple steps</h2>
                        <div class="reg-card-list">
                            <div class="card">
                                <span class="counter">1</span>
                                <h4>Register</h4>
                                <p class="lead-4">Choose an account type and complete our fast and secure application form</p>
                            </div>
                            <div class="card">
                                <span class="counter">2</span>
                                <h4>Verify</h4>
                                <p class="lead-4">Use our digital onboarding system for fast verification</p>
                            </div>
                            <div class="card">
                                <span class="counter">3</span>
                                <h4>Fund</h4>
                                <p class="lead-4">Fund your trading account using a wide range of funding methods</p>
                            </div>
                            <div class="card">
                                <span class="counter">4</span>
                                <h4>Trade</h4>
                                <p class="lead-4">Start trading on your live account and access +2,100 instruments</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{route('register')}}" class="btn btn-primary">Open an account</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        
    
        
        <section class="main-cta-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Instant account opening & funding</h2>
                        <h5>Trade within minutes!</h5>
                        <div class="btn-flex">
                            <a class="btn btn-primary me-0 me-md-3" id="home_live_registration_11" href="{{route('register')}}">
                                Get Started
                            </a>
                            <a class="btn btn-outline-primary" id="home_demo_registration_1" href="{{route('login')}}">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
</main>
<!-- Adform Tracking Code BEGIN -->

<noscript>
    <p style="margin:0;padding:0;border:0;">
        <img src="https://track.adform.net/Serving/TrackPoint/?pm=2514467&amp;ADFPageName=ICM_HP_Visit&amp;ADFdivider=|" width="1" height="1" alt="" />
    </p>
</noscript>
<!-- Adform Tracking Code END -->
        

@include('home.footer')