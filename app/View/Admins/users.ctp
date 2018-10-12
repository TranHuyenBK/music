<?php 
include_once("index.ctp");
?>
    <div class="content-wrapper">
        <div class="inline content-heading">
            <h1 class="content-header">Users Manager</h1>
            <div class="dropdown-divider"></div>
        </div>
        <div class="content-body contain">
            <div class="wrap">

                <div class="search-by-column" id="col-user-name">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="user-name-search" type = "text" placeholder="Enter user's name"/>
                    <label for="user-name-search">Name</label>
                </div>

                <div class="search-by-column" id="col-user-role">
                    <label for="search">Role</label>
                </div>

                <div class="search-by-column" id="col-user-status">
                    <label for="search">Status</label>
                </div>

                <div class="search-by-column inline" id="col-user-followers">                
                    <div class="range-min">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="user-followers-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px" align="center">Number of Followers</label>
                    <!-- <div class="range-button plus-button"><i class="fa fa-plus-circle"></i></div>
                    <div class="range-button from-to-button"><i class="fa fa-arrow-circle-right"></i></div> -->
                    <!-- <div class="range-max">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>
                        <input class ="max" id="user-followers-max" min="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div> -->
                </div>

                <div class="search-by-column inline" id="col-user-reports">                
                    <div class="range-min">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="user-reports-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px" align="center">Reported Times</label>
                    <div class="range-button plus-button"><i class="fa fa-plus-circle"></i></div>
                    <div class="range-button from-to-button"><i class="fa fa-arrow-circle-right"></i></div>
                    <div class="range-max">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>
                        <input class ="max" id="user-reports-max" min="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>

                <div class="search-by-column" id="col-user-login">
                    <div class="range-min">  
                        <span class="empty"><i class="fas fa-times inside right"></i></span>  
                        <input class ="min" id="user-login-from" type="text" placeholder="Enter user's last login time">
                    </div>
                    <label for="search" class="range-label" style="width: 200px" align="center">Last Login Time</label>
                    <div class="range-button plus-button"><i class="fa fa-plus-circle"></i></div>
                    <div class="range-button from-to-button"><i class="fa fa-arrow-circle-down"></i></div>
                    <div class="range-max">   
                        <span class="empty"><i class="fas fa-times inside right"></i></span>   
                        <input class ="max" id="user-login-to" type="text" placeholder="Enter user's last login time">
                    </div>
                </div>

            </div>
            <div class="search-by-column inside right" id="keyword">
                <span class="empty"><i class="fas fa-times inside right"></i></span>
                <input id="keyword-search" type = "text" placeholder="Enter your keyword"/>
                <label for="keyword-search"><i class="fa fa-search" ></i></label>
            </div>

            <table id="darktable" class="display darktable" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Telephone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit_role</th>
                        <th>Number of Followers</th>
                        <th>Reported Times </th>
                        <!-- <th>Account Creation Time</th> -->
                        <th>Last Online Time</th>
                        <th>Status</th>
                        <th>Edit_status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Admin</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Admin" selected="selected">
                                    Admin
                                </option>
                                <option value="Personal Users">
                                    Personal User
                                </option>
                            </select>
                        </td>
                        <td>456</td>
                        <td>20</td>
                        <!-- <td>12/10/2003</td> -->
                        <td></td>
                        <td>Active</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Active" selected="selected">
                                    Active
                                </option>
                                <option value="Inactive">
                                    Inactive
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Admin</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Admin" selected="selected">
                                    Admin
                                </option>
                                <option value="Personal Users">
                                    Personal User
                                </option>
                            </select>
                        </td>
                        <td>456</td>
                        <td>20</td>
                        <!-- <td>12/10/2003</td> -->
                        <td></td>
                        <td>Active</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Active" selected="selected">
                                    Active
                                </option>
                                <option value="Inactive">
                                    Inactive
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Dr</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Personal User</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Admin">
                                    Admin
                                </option>
                                <option value="Personal Users" selected="selected">
                                    Personal User
                                </option>
                            </select>
                        </td>
                        <td>34</td>
                        <td>123</td>
                        <!-- <td>12/10/2023</td> -->
                        <td></td>
                        <td>Inactive</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select" >
                                <option value="Active">
                                    Active
                                </option>
                                <option value="Inactive" selected="selected">
                                    Inactive
                                </option>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr >
                        <td colspan="13">  
                            <button class="change-button" id="save"><i class="fa fa-check" ></i></button> 
                            <button class="change-button" id="cancel"><i class="fa fa-times" ></i></button>
                            <button class="change-button" id="edit"><i class="fa fa-edit" ></i></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <p class="note"> * Click to select a single row </p>
            <p class="note"> ** Double click to view in detail </p>
        </div>
    </div>
</div>