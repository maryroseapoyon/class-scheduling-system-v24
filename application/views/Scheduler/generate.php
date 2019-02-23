 <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Generate</h1>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        Mutation Probability<input type="range" min="1" max="100" value="100"id="mutation_probability"><div class="d-inline" id="mupro"></div></br>
                        Mutation Size<input type="range" min="1" max="100" value="10" id="mutation_size"><div class="d-inline" id="musi"></div></br>
                        Crossover Probability<input type="range" min="1" max="100" value="100" id="crossover_probability"><div class="d-inline" id="xpro"></div></br>
                        Crossover Points<input type="range" min="1" max="5" value="4" id="crossover_points"><div class="d-inline" id="xpoi"></div></br>
                        Sample Size<input type="range" min="1" max="100" value="10" id="sample_size"><div class="d-inline" id="sasi"></div></br>
                        Generation Interval<input type="range" min="1" max="10000" value="1000" id="generation_interval"><div class="d-inline" id="gein"></div></br>
                        <input type="button" id="btn_generate" value="Generate">
                        
                        <?php var_dump($room)  ?>

                    </div>
                </div>
            </div>

        </div> <!-- .content -->
            <div class="modal fade" id="GenModal" tabindex="-1" >

            </div>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"> </script>
        <script type="text/javascript">
            var slider1 = document.getElementById("mutation_probability");
            var slider2 = document.getElementById("mutation_size");
            var slider3 = document.getElementById("crossover_probability");
            var slider4 = document.getElementById("crossover_points");
            var slider5 = document.getElementById("sample_size");
            var slider6 = document.getElementById("generation_interval");
            var output1 = document.getElementById("mupro");
            var output2 = document.getElementById("musi");
            var output3 = document.getElementById("xpro");
            var output4 = document.getElementById("xpoi");
            var output5 = document.getElementById("sasi");
            var output6 = document.getElementById("gein");
            output1.innerHTML = slider1.value;
            output2.innerHTML = slider2.value;
            output3.innerHTML = slider3.value;
            output4.innerHTML = slider4.value;
            output5.innerHTML = slider5.value;
            output6.innerHTML = slider6.value;
            slider1.oninput = function() {
                output1.innerHTML = this.value;
            }
            slider2.oninput = function() {
                output2.innerHTML = this.value;
            }
            slider3.oninput = function() {
                output3.innerHTML = this.value;
            }
            slider4.oninput = function() {
                output4.innerHTML = this.value;
            }
            slider5.oninput = function() {
                output5.innerHTML = this.value;
            }
            slider6.oninput = function() {
                output6.innerHTML = this.value;
            }
        </script>   
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btn_generate').on('click', function(){
                    var mutprob = $('#mutation_probability').val();
                    var mutsize = $('#mutation_size').val();
                    var xprob = $('#crossover_probability').val();
                    var xpoint = $('#crossover_points').val();
                    var samsize = $('#sample_size').val();
                    var genint = $('#generation_interval').val();
                    if(isNaN(mutprob) || isNaN(mutsize) || isNaN(xprob) || isNaN(xpoint) || isNaN(samsize) || isNaN(genint))
                        alert("Must Numerical Only!");
                    else{
                        $.ajax({
                        type:'GET',
                        data:{
                            mutprob : mutprob,
                            mutsize : mutsize,
                            xprob : xprob,
                            xpoint : xpoint,
                            samsize : samsize,
                            genint : genint,
                        },
                        url:'<?php echo site_url('welcome_admin/activeGen');?>',
                        success: function(result){
                                $('.alert').html('result');
                        }

                        })
                    }
                });
            });
            
        </script>