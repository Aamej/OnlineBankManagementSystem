<?php
include("header.php");
include("sidebar.php");
?>
     <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Preferences</a></li>
            <li class="active">Form Controls</li>
          </ol>
          <h1>Preferences</h1>
          <p class="margin-bottom-15">Here goes another form and form controls.</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" value="John">                  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" value="Henry">                 
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label>Username</label>
                    <p class="form-control-static" id="username">@admin</p>
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label>Email address</label>
                    <p class="form-control-static" id="email">admin@company.com</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" value="********" disabled>  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">New Password</label>
                    <input type="password" class="form-control" id="password_1" placeholder="New Password">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_2">Confirm New Password</label>
                    <input type="password" class="form-control" id="password_2" placeholder="Confirm New Password">  
                  </div>
                </div>
                
                <div class="has-success has-feedback">
                  <div class="row">
                   <div class="col-md-12 margin-bottom-15">
                    <label class="control-label" for="inputSuccess">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess">
                    <span class="fa fa-check form-control-feedback"></span>
                  </div> 
                </div>
                
              </div>
              <div class="row has-warning has-feedback">
                <div class="col-md-12 margin-bottom-15">
                  <label class="control-label" for="inputWarning">Input with warning</label>
                  <input type="text" class="form-control" id="inputWarning">
                  <span class="fa fa-warning form-control-feedback"></span>
                </div>
              </div>
              <div class="row has-error has-feedback">
                <div class="col-md-12 margin-bottom-15">
                  <label class="control-label" for="inputError">Input with error</label>
                  <input type="text" class="form-control" id="inputError">
                  <span class="fa fa-times form-control-feedback"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label for="notes">Notes</label>
                  <textarea class="form-control" rows="3" id="notes"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Single selection control</label>
                  <select class="form-control margin-bottom-15" id="singleSelect">
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>JavaScript</option>
                    <option>jQuery</option>
                    <option>Bootstrap</option>
                  </select>
                  <label for="multipleSelect">Multiple selection control</label>
                  <select multiple class="form-control" id="multipleSelect">
                    <option>Charts</option>
                    <option>Graphs</option>
                    <option>Forms</option>
                    <option>Icons</option>
                    <option>Responsive</option>
                  </select>  
                </div>
                <div class="col-md-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      Email me when new memeber sign up.
                    </label>
                  </div>
                  <div class="checkbox disabled margin-bottom-15">
                    <label>
                      <input type="checkbox" value="" disabled>
                      Never email me.
                    </label>
                  </div>
                  <div class="radio margin-bottom-15">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      HTML format
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Plain text
                    </label>
                  </div>
                  <div class="radio disabled">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Rich text
                    </label>
                  </div>                 
                </div>                            
              </div>                
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Server status
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2" checked> Memember status
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option3" checked> Expired members
                  </label>                      
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Bootstrap
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Foundation
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Skeleton
                  </label>                    
                </div>                  
              </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-30">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">You can upload file here.</p>  
                </div>                  
              </div>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
	include("footer.php");
	?>