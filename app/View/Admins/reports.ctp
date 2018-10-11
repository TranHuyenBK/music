<?php 
include_once("index.ctp");
?>
    <div class="content-wrapper">
        <div class="inline content-heading">
            <h1 class="content-header">Reports Manager</h1>
            <div class="dropdown-divider"></div>
        </div>
        <div class="content-body contain">
            <div class="wrap">

                <div class="search-by-column" id="col-report-pic">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="report-pic-search" type = "text" placeholder="Enter picture's id"/>
                    <label for="report-pic-search">Picture's id</label>
                </div>

                <div class="search-by-column" id="col-report-owner">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="report-owner-search" type = "text" placeholder="Enter owner's name"/>
                    <label for="report-owner-search">Owner's name</label>
                </div>

                <div class="search-by-column" id="col-report-er">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="report-er-search" type = "text" placeholder="Enter reporter's name"/>
                    <label for="report-er-search">Reporter's name</label>
                </div>

                <div class="search-by-column" id="col-report-pic-status">
                    <label for="search">Picture's status</label>
                </div>

                <div class="search-by-column" id="col-report-status">
                    <label for="search">Report's status</label>
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
                        <th>Picture's id</th>
                        <th>Picture's name</th>
                        <th>Picture's status</th>
                        <th>Edit_Picture's status</th>
                        <th>Owner's name</th>
                        <th>Reporter's name</th>
                        <th>Reason's type</th>
                        <th>Reason</th>
                        <th>Report Time</th>
                        <th>Report's status</th>
                        <th>Edit_Report's status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Good</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Good" selected="selected">Good</option>
                                <option value="Undefined"> Undefined</option>
                                <option value="Banned">Banned</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Processed</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Pending" >Pending</option>
                                <option value="Processing"> Processing</option>
                                <option value="Processed" selected="selected">Processed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Banned</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Good" >Good</option>
                                <option value="Undefined"> Undefined</option>
                                <option value="Banned" selected="selected">Banned</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Processed</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Pending" >Pending</option>
                                <option value="Processing"> Processing</option>
                                <option value="Processed" selected="selected">Processed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Undefined</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Good" >Good</option>
                                <option value="Undefined" selected="selected"> Undefined</option>
                                <option value="Banned" >Banned</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Processing</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Pending">Pending</option>
                                <option value="Processing"  selected="selected"> Processing</option>
                                <option value="Processed" >Processed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Good</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Good" selected="selected">Good</option>
                                <option value="Undefined" > Undefined</option>
                                <option value="Banned" >Banned</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Pending</td>
                        <td style="padding:0">
                            <select id="user-office-select" class="edit-select">
                                <option value="Pending" selected="selected">Pending</option>
                                <option value="Processing"  > Processing</option>
                                <option value="Processed" >Processed</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr >
                        <td colspan="12">  
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