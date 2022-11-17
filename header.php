<?php 
						session_start();
					    ?>
            
            <div class="headzz d-flex align-items-center justify-content-between" style ="padding :20px;">
                    <div class="">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="input-group-text border-0 btn btn-primary" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class ="d-flex">
                        <span class="not">
                            <i class="bi bi-bell me-2"></i>
                        </span>
                        <span class="immg d-flex flex-column ">
                           <div><img src="img/user-icon.png" alt=""></div>
                            <?php 
                            echo $_SESSION['name'];
                            ?>
                        </span>
                    </div>
            </div>