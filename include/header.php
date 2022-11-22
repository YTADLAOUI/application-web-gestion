
            <div class="headzz d-flex align-items-center justify-content-between" style ="padding :20px;">
                    <div class="">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded inpu" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="input-group-text border-0 btn btn-primary search" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class ="d-flex">
                        <span class="not" style="margin: 2px;">
                            <i class="bi bi-bell me-2"></i>
                        </span>
                        <span class="immg d-flex ">
                           <div class="me-2 "><img style="height:20px;width: 20px;" src="img/user-icon.png" alt=""></div>
                            <?php 
                            echo $_SESSION['name'];
                            ?>
                        </span>
                    </div>
            </div>