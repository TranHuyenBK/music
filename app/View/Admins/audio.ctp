<?php 
include_once("index.ctp");
?>
    <div class="content-wrapper">
        <div class="inline content-heading">
            <h1 class="content-header">Audio Manager</h1>
            <div class="dropdown-divider"></div>
        </div>
        <div class="content-body contain">
            <div class="wrap">

                <div class="search-by-column" id="col-pic-name">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="pic-name-search" type = "text" placeholder="Enter picture's name"/>
                    <label for="pic-name-search">Name</label>
                </div>

                <div class="search-by-column" id="col-pic-owner">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="pic-owner-search" type = "text" placeholder="Enter picture's owner"/>
                    <label for="pic-owner-search">Owner</label>
                </div>

                <div class="search-by-column" id="col-pic-tag">
                    <span class="empty"><i class="fas fa-times inside right"></i></span>
                    <input id="pic-tag-search" type = "text" placeholder="Enter picture's tag"/>
                    <label for="pic-tag-search">Tags</label>
                </div>

                <div class="search-by-column inline" id="col-pic-likes">                
                    <div class="">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="pic-likes-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px">Number of Likes</label>
                </div>

                <div class="search-by-column inline" id="col-pic-shares">                
                    <div class="">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="pic-shares-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px">Number of Shares</label>
                </div>

                <div class="search-by-column inline" id="col-pic-comments">                
                    <div class="">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="pic-comments-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px">Number of Comments</label>
                </div>
                <div class="search-by-column inline" id="col-pic-comments">                
                    <div class="">    
                        <button class="adjust-quantity" onclick="this.nextElementSibling.stepDown()" >-</button>                        
                        <input class ="min" id="pic-comments-min" min="0" value="0" name="quantity" type="number">
                        <button class="adjust-quantity" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                    <label for="search" class="range-label" style="width: 200px">Listen</label>
                </div>
                <div class="search-by-column inline" id="col-pic-uploadfile">                
                    <div class="">    
                        <div class="upload-file">
                            <button class="btn btn-sm" disabled></button>
                            <input type="file" name=""/>
                        </div> 
                    </div>
                    <label for="search" class="range-label" style="width: 200px">Upload MP3</label>
                    
                </div>

            </div>
            

            <table id="darktable" class="display darktable" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Source</th>
                        <th>Number of Likes</th>
                        <th>Number of Shares</th>
                        <th>Number of Comments</th>
                        <th>Tags</th>
                        <th>Lyrics</th>
                        <th>listen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>243</td>
                        <td>324</td>
                        <td>1</td>
                        <td class="wrap" style="justify-content: flex-start">
                            <div  class="label-darktable">#beachinhouse</div>
                            <div class="label-darktable">#mountain</div>
                        </td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>42788</td>
                        <td>254</td>
                        <td>234</td>
                        <td class="wrap" style="justify-content: flex-start">
                            <div  class="label-darktable">#beachinhouse</div>
                            <div class="label-darktable">#mountain</div>
                            <div class="label-darktable">#fish</div>
                            <div class="label-darktable">#camping</div>
                            <div class="label-darktable">#hotsummersunshinefunny</div>
                        </td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>14</td>
                        <td class="wrap" style="justify-content: flex-start">
                            <div  class="label-darktable">#beachinhouse</div>
                            <div class="label-darktable">#camping</div>
                            <div class="label-darktable">#hotsummersunshinefunny</div>
                        </td>
                        <td>1</td>
                        <td>1</td>
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