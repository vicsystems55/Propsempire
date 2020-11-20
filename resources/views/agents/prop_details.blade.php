<fieldset class="pt-0">
            <h6 class="pb-50">Enter your Account Details</h6>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="firstName12">Title </label>
                  <input type="text" class="form-control" id="title" placeholder="Enter a title">
                  <small class="text-muted form-text"></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="lastName1">Description</label>
                  <input type="text" class="form-control" id="lastName1" placeholder="Enter a description">
                  <small class="text-muted form-text"></small>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                <label for="lastName1">Location</label>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
                    <input type="hidden" id="loc_lat" />
                    <input type="hidden" id="loc_long" />
                </div>

                <!-- Display latitude and longitude -->
                <div class="latlong-view">
                    <p><b>Latitude:</b> <span id="latitude_view"></span></p>
                    <p><b>Longitude:</b> <span id="longitude_view"></span></p>
                </div>
                </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="category">Category</label>
                        <select class="form-control">
							          <option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						            </select>
                    </div>
                  </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="type">Type</label>
                          <select class="form-control">
                            <option value="square">Square</option>
                              <option value="rectangle">Rectangle</option>
                              <option value="rombo">Rombo</option>
                              <option value="romboid">Romboid</option>
                              <option value="trapeze">Trapeze</option>
                              <option value="traible">Triangle</option>
                              <option value="polygon">Polygon</option>
                            </select>
                        </div>
                      </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="type">Bedrooms</label>
                             <select class="form-control">
                                <option value="square">Square</option>
                                  <option value="rectangle">Rectangle</option>
                                  <option value="rombo">Rombo</option>
                                  <option value="romboid">Romboid</option>
                                  <option value="trapeze">Trapeze</option>
                                  <option value="traible">Triangle</option>
                                  <option value="polygon">Polygon</option>
                              </select>
                          </div>
                        </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Toilet</label>
                          <select class="form-control">
                                <option value="square">Square</option>
                                  <option value="rectangle">Rectangle</option>
                                  <option value="rombo">Rombo</option>
                                  <option value="romboid">Romboid</option>
                                  <option value="trapeze">Trapeze</option>
                                  <option value="traible">Triangle</option>
                                  <option value="polygon">Polygon</option>
                              </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Bedrooms</label>
                          <select class="form-control">
                                <option value="square">Square</option>
                                  <option value="rectangle">Rectangle</option>
                                  <option value="rombo">Rombo</option>
                                  <option value="romboid">Romboid</option>
                                  <option value="trapeze">Trapeze</option>
                                  <option value="traible">Triangle</option>
                                  <option value="polygon">Polygon</option>
                              </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                          <div class="form-group mt-2">
                          <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="checkbox checkbox-primary">
                                      <input type="checkbox" id="colorCheckbox1" checked>
                                      <label for="colorCheckbox1">Furnished</label>
                                  </div>
                                </fieldset>
                              </li>
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="checkbox checkbox-secondary">
                                      <input type="checkbox" id="colorCheckbox2" checked>
                                      <label for="colorCheckbox2">Parking</label>
                                  </div>
                                </fieldset>
                              </li>
                              
                            
                            </ul>
                          </div>

                      </div>
               </div>

              <div class="row">
                  <div class="col-md-6">
                    <label for="">Min Price</label>
                  <input type="text" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2">

                  
                  </div>

                    <div class="col-md-6">
                      <label for="">Max Price</label>
                    <input type="text" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2">
                    
                    </div>

               </div>

              
          </fieldset>