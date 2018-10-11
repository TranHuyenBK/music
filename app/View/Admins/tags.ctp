<?php 
include_once("index.ctp");
?>
    <div class="content-wrapper">
        <div class="inline content-heading">
            <h1 class="content-header">Tags Manager</h1>
            <div class="dropdown-divider"></div>
        </div>
        <div class="content-body contain">
            <div class="wrap" >

                <div class="search-by-column" id="col-tag-name">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="tag-name-search" type = "text" placeholder="Enter tag's name"/>
                    <label for="tag-name-search">Name</label>
                </div>

                <div class="search-by-column" >
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="keyword-search" type = "text" placeholder="Enter your keyword"/>
                    <label for="keyword-search"><i class="fa fa-search" ></i></label>
                </div>

                <div class="search-by-column inline" id="col-tag-pics">                
                    <div class="range-min">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="tag-pics-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 240px">Number of Pictures</label>
                    <div class="range-button plus-button"><i class="fa fa-plus-circle"></i></div>
                    <div class="range-button from-to-button"><i class="fa fa-arrow-circle-right"></i></div>
                    <div class="range-max">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>
                        <input class ="max" id="tag-pics-max" min="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>

            </div>

            <table id="darktable" class="display darktable" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Owner</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>deg</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>t1</td>
                        <td></td>
                        <td>245</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>34</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr >
                        <td colspan="3">  </td>
                    </tr>
                </tfoot>
            </table>
            <p class="note"> * Click to select a single row </p>
            <p class="note"> ** Double click to view in detail </p>
        </div>
    </div>
</div>