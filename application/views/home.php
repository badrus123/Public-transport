<?php 
 $this->load->view('navbar');
?>



        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Menemukan <br>sebuah kendaraan umum</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Temukan kendaraan umum untuk sampai ke tujuan</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
    	<div class="container-wrap ml-auto">
    		<div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Kereta</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bis</a>

              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Angkot</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Asal</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Tujuan</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Penumpang</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Asal</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Tujuan</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Penumpang</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
								<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Asal</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Tujuan</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Penumpang</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>
            </div>
          </div>
        </div>
			</div>
			
<div align="center">
<iframe src="http://dedicate.marktel.co/brt-bandung/" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

    
    

   
    <section class="ftco-section">
 <!--Card list!-->
	
 <div class="mx-auto col-md-10 pt-5">
		<div class="card-deck">
			<div id="list-event-card" class="row">
				<!--TEMPLATE FOR DYNAMIC CARD LIST-->
				
				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
							<a href="#" class="event-card-link"></a>
						</div>

					</div>

				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> 
				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.0000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
							<a href="#" class="event-card-link"></a>
						</div>

					</div>

				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().'assets/images/restaurant-2.jpg'?>"><img src="<?php echo base_url().'assets/images/restaurant-2.jpg'?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title">Bandung-Jakarta</h3>
							<h6 class="card-subtitle text-muted pb-3">Tiket kereta</h6>
							<p class="card-text pt-2">
								Public Transport Menyediakan jasa untuk mengantar anda ke tujuan dengan fasilitas terbaik dari kami
							</p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Harga</br></b></a>
										<a class="card-list-subtext">Rp 50.000</a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Discount</br></b></a>
										<a class="card-list-subtext">10%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa</br></b></a>
										<a class="card-list-subtext">15</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
			<div align="center" >
				<a  role="button" class="btn btn-outline-warning btn-dropdown mx-auto" href="listevent.html">Lihat Semua</a>
		</div>
	</div>
	
   </section>

   
	 <?php 
 $this->load->view('footer');
?>