<fieldset class="pt-0">
            <h6 class="py-50">Select your Services</h6>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Delivery Type</label>
                  <select name="delivery" class="form-control">
                    <option value="">Select a Service Type Option</option>
                    <option value="overnight" selected="">Overnight Delivery (within 48 hours)</option>
                    <option value="express">Express Delivery (within 5 working days)</option>
                    <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="eventLocation12">Preferred Delivery Window</label>
                  <select name="preferreddelivery" class="form-control">
                    <option value="">Select a Preferred Delivery Option</option>
                    <option value="morning" selected="">Morning Delivery (8:00AM - 11:00AM)</option>
                    <option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
                    <option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Packing Type</label>
                  <select name="packaging" class="form-control">
                    <option value="">Select a Packaging Type Option</option>
                    <option value="regular" selected="">Regular Packaging</option>
                    <option value="oversized">Oversized Packaging</option>
                    <option value="fragile">Fragile Packaging</option>
                    <option value="frozen">Frozen Packaging</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="mr-2">Requirements :</label>
                  <div class="c-inputs-stacked">
                    <div class="d-inline-block mr-2">
                      <fieldset>
                        <div class="checkbox pb-1">
                          <input type="checkbox" class="checkbox__input" id="checkbox114">
                          <label for="checkbox114">Ordanary</label>
                        </div>
                      </fieldset>
                    </div>
                    <div class="d-inline-block">
                      <fieldset>
                        <div class="checkbox pb-1">
                          <input type="checkbox" class="checkbox__input" id="checkbox12">
                          <label for="checkbox12">Express</label>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>