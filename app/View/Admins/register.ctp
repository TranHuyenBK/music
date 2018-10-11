<div id="background">
    <div class="registration-form">
        <header>
            <h1>Sign up an admin account</h1>
            <p>Fill fully in each information sections</p>
            <p class="instruction">First, Who are you?</p>
        </header>   
        <form id="signupAdmin" onsubmit="return false">
            <div class="input-section name-section">
                <div class="animated-button">
                    <span class="icon-lastname-card"><i class="fa fa-font"></i></span>
                    <span class="icon-firstname-card"><i class="fa fa-id-card-alt"></i></span>
                </div>
                <div class="sub-input-section">
                    <input class="first name" type="text" placeholder="ENTER YOUR LASTNAME HERE" autocomplete="off">
                    <input class="second name" type="text" placeholder="ENTER YOUR LASTNAME FIRST" autocomplete="off" readonly>
                </div>
                <div class="animated-button" style="display: none">
                    <span class="next-button name"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section contact-section folded">
                <div class="animated-button">
                    <span class="icon-email"><i class="fa fa-envelope"></i></span>
                    <span class="icon-phone"><i class="fa fa-mobile-alt"></i></span>
                </div>
                <div class="sub-input-section">
                    <input class="first contact" type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off">
                    <input class="second contact" type="text" placeholder="ENTER YOUR PHONE HERE" autocomplete="off" readonly>
                </div>
                <div class="animated-button" style="display: none">
                    <span class="next-button contact"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section password-section folded">
                <div class="animated-button">
                    <span class="icon-lock"><i class="fa fa-lock"></i></span>
                    <span class="icon-repeat-lock"><i class="fa fa-chevron-circle-down"></i></span>
                </div>
                <div class="sub-input-section">
                    <input class="first password" type="password" placeholder="ENTER YOUR PASSWORD HERE">
                    <input class="second password" type="password" placeholder="REPEAT YOUR PASSWORD HERE" readonly>
                </div>
                <div class="animated-button" style="display: none">
                    <span class="next-button password"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="success"> 
                <p>ACCOUNT CREATED</p>
            </div>
        </form>
    </div>
</div>