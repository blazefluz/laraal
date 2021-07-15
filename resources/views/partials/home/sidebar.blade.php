
<div class="agent-box shadow">
    <div class="container">
        <h6>Advance Search</h6>
        <form class="py-4" style="font-size: 13px !important">
            <div class="form-row">
                <div class="col-md-12 form-group">
                  <input type="text" name="location" class="form-control" id="name" placeholder="Enter Location" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <span>Category</span>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>For Rent</option>
                        <option>For Sale</option>
                        <option>Shortlet</option>
                      </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Type</span>
                    <select name="type" id=""   class="form-control" >
                        <option >Type</option>
                        <option value="rent" >Rent</option>
                        <option value="sale" >Sale</option>
                        <option value="land" >Land</option>
                        <option value="shortlet" >Short Let</option>
                    </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>State</span>
                    <select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
                        <option value="" selected="selected">- Select -</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="AkwaIbom">AkwaIbom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">FCT</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamafara</option>
                    </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Locality</span>
                    <select name="lga" id="lga" class="form-control select-lga" required>
                        <option>Select LGA...</option>
                    </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Bed</span>
                    <select name="bed" id=""   class="form-control" >
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedrooms</option>
                        <option value="3">3 Bedrooms</option>
                        <option value="4">4 Bedrooms</option>
                        <option value="5">5 Bedrooms</option>
                        <option value="6">6 Bedrooms</option>
                        <option value="7">7 Bedrooms</option>
                        <option value="8">8 Bedrooms</option>
                        <option value="9">9 Bedrooms</option>
                        <option value="10">10+ Bedrooms</option>
                      </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Bath</span>
                    <select name="bath" id=""   class="form-control" >
                        <option value="1">1 Bathroom</option>
                        <option value="2">2 Bathrooms</option>
                        <option value="3">3 Bathrooms</option>
                        <option value="4">4 Bathrooms</option>
                        <option value="5">5 Bathrooms</option>
                        <option value="6">6 Bathrooms</option>
                        <option value="7">7 Bathrooms</option>
                        <option value="8">8 Bathrooms</option>
                        <option value="9">9 Bathrooms</option>
                        <option value="10">10+ Bathrooms</option>
                      </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Min price</span>
                    <select name="price" id=""   class="form-control" >
                        <option value="500000">500,000</option>
                        <option value="600000">600,000</option>
                        <option value="700000">700,000</option>
                        <option value="800000">800,000</option>
                        <option value="900000">900,000</option>
                        <option value="1000000">1 million</option>
                        <option value="2000000">2 million</option>
                        <option value="5000000">5 million</option>
                        <option value="10000000">10 million</option>
                        <option value="20000000">20 million</option>
                        <option value="30000000">30 million</option>
                        <option value="40000000">40 million</option>
                        <option value="50000000">50 million</option>
                        <option value="100000000">100 million</option>
                        <option value="200000000">200 million</option>
                        <option value="300000000">300 million</option>
                        <option value="400000000">400 million</option>
                        <option value="500000000">500 million</option>
                        <option value="1000000000">1 billion</option>
                        <option value="2000000000">2 billion</option>
                        <option value="3000000000">3 billion</option>
                        <option value="4000000000">4 billion</option>
                        <option value="5000000000">5 billion</option>
                        <option value="10000000000">10 billion</option>
                    </select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <span>Max price</span>
                    <select name="price" id=""   class="form-control" >
                        <option value="500000">500,000</option>
                        <option value="600000">600,000</option>
                        <option value="700000">700,000</option>
                        <option value="800000">800,000</option>
                        <option value="900000">900,000</option>
                        <option value="1000000">1 million</option>
                        <option value="2000000">2 million</option>
                        <option value="5000000">5 million</option>
                        <option value="10000000">10 million</option>
                        <option value="20000000">20 million</option>
                        <option value="30000000">30 million</option>
                        <option value="40000000">40 million</option>
                        <option value="50000000">50 million</option>
                        <option value="100000000">100 million</option>
                        <option value="200000000">200 million</option>
                        <option value="300000000">300 million</option>
                        <option value="400000000">400 million</option>
                        <option value="500000000">500 million</option>
                        <option value="1000000000">1 billion</option>
                        <option value="2000000000">2 billion</option>
                        <option value="3000000000">3 billion</option>
                        <option value="4000000000">4 billion</option>
                        <option value="5000000000">5 billion</option>
                        <option value="10000000000">10 billion</option>
                    </select>
                  <div class="validate"></div>
                </div>
                <button class="btn btn-block btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
