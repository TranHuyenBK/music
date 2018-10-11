<?php 
include_once("index.ctp");
?>
    <div class="content-wrapper">
        <div class="inline">
            <h1 class="content-header">My Account</h1>
            <div class="dropdown-divider"></div>
        </div>
        <div class="wrap" style="justify-content: flex-start;">
            <div class="container">
                <div class="avatar-upload" >
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><i class="fa fa-camera-retro"></i></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(/picceo/img/my_ad_ava.jpeg);"></div></div>
                    </div>
                    <p class="account-name">Account's name</p>
                </div>
                <div class="inline-horizontal account-profile">
                    <label for="account-name">Name</label>
                    <div class="input-group input-group-icon">
                        <input type="text" class="inside" readonly>
                        <div class="input-icon contain"><i class="fa fa-user"></i></div>
                    </div>
                    <label for="account-name">Telephone</label>
                    <div class="input-group input-group-icon">
                        <input type="text" class="inside" readonly>
                        <div class="input-icon contain"><i class="fa fa-phone"></i></div>
                    </div>
                    <label for="account-name">Email</label>
                    <div class="input-group input-group-icon">
                        <input type="text" class="inside" readonly>
                        <div class="input-icon contain"><i class="fa fa-envelope"></i></div>
                    </div>
                    <label for="account-name">Address</label>
                    <div class="input-group input-group-icon">
                        <input type="text" class="inside" readonly>
                        <div class="input-icon contain"><i class="fa fa-map-marker-alt"></i></div>
                    </div>
                    <label for="account-name">Password</label>
                    <div class="input-group input-group-icon">
                        <input type="password" class="inside" readonly>
                        <span class="input-icon contain"><i class="fa fa-unlock"></i></span>
                        <span class="input-icon contain right" style="margin-right: -4rem; cursor: pointer;"><i class="fa fa-eye" style="border: none"></i></span>
                    </div>
                    <label for="account-name" id="reenter-password">Re-enter Password</label>
                    <div class="input-group input-group-icon" id="reenter-password">
                        <input type="password" class="inside">
                        <span class="input-icon contain"><i class="fa fa-unlock"></i></span>
                        <span class="input-icon contain right" style="margin-right: -4rem; cursor: pointer;"><i class="fa fa-eye" style="border: none"></i></span>
                    </div>
                </div>
            </div>
            <div class="update-profile">
                <button id="submit-edit-profile" style="background: green"><i class="fa fa-check" ></i></button>
                <button id="cancel-edit-profile" style="background: red"><i class="fa fa-times" ></i></button>
                <button id="edit-profile"><i class="fa fa-edit" ></i></button> 
            </div>
        </div>
    </div>
</div>