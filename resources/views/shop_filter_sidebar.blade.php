
<div class="accordion"> 
    <div class="d-inline-flex justify-content-around mb-2" style="width: 100%;">
        <label class="form-label filter_label"> Filter : </label><a href="{{route('shop')}}" class="btn btn-primary"> Clear Filter</a>
    </div>       
    <div class="card">
        <div class="card-header" id="headingOne">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Gender
        </a>
        </div>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
        <div class="accordion-body">
            <?php $gender=['1'=>'Male','2'=>'Female','3'=>'Either']; ?>
            <?php 
                foreach($gender as $key=>$gen_val){    
            ?>
            <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="gender[]" value="{{$key}}" id="gender_{{$key}}" <?php echo (!empty($filter['gender']) && in_array($key,$filter['gender']))?"checked='checked'":"";?>>
                <label class="form-check-label" for="gender_{{$key}}">
                {{$gen_val}}
                </label>
            </div>
            <?php }?>            
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <a class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="<?php echo (!empty($filter['breed']))?"true":"false";?>" aria-controls="collapseTwo">
                Breed
            </a>
        </div>
        <div id="collapseTwo" class="accordion-collapse collapse <?php echo (!empty($filter['breed']))?"show":"";?>" aria-labelledby="headingTwo" data-bs-parent="#accordion">
        <div class="accordion-body">
            <?php if(!$breed_info->isEmpty()){
                foreach($breed_info as $breed){    
            ?>
            <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="breed[]" value="{{$breed['id']}}" id="breed_{{$breed['id']}}" <?php echo (!empty($filter['breed']) && in_array($breed['id'],$filter['breed']))?"checked='checked'":"";?>>
                <label class="form-check-label" for="breed_{{$breed['id']}}">
                {{$breed['breed']}}
                </label>
            </div>
            <?php }}?>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="<?php echo (!empty($filter['doodle']))?"true":"false";?>" aria-controls="collapseThree">
            Collections
        </a>
        </div>
        <div id="collapseThree" class="accordion-collapse collapse <?php echo (!empty($filter['doodle']))?"show":"";?>" aria-labelledby="headingThree" data-bs-parent="#accordion">
        <div class="accordion-body">                    
            <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="doodle" id="doodle_puppies" <?php echo (!empty($filter['doodle']))?"checked='checked'":"";?>>
                <label class="form-check-label" for="doodle_puppies">
                    Doodle Puppies
                </label>
            </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingfour">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="<?php echo (!empty($filter['age']))?"true":"false";?>" aria-controls="collapse4">
            Age
        </a>
        </div>
        <div id="collapse4" class="accordion-collapse collapse <?php echo (!empty($filter['age']))?"show":"";?>" aria-labelledby="headingfour" data-bs-parent="#accordion">
        <div class="accordion-body"> 
            <?php $age_resultant=['all'=>'Any Age', '8'=>'Up to 8 Weeks', '12'=>'Up to 12 Weeks', '16'=>'Up to 16 Weeks', '20'=>'Older than 16 Weeks']; ?>
            <?php 
                foreach($age_resultant as $key=>$age){    
            ?>
            <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="age[]" value="{{$key}}" id="age_{{$key}}" <?php echo (!empty($filter['age']) && in_array($key,$filter['age']))?"checked='checked'":"";?>>
                <label class="form-check-label" for="age_{{$key}}">
                {{$age}}
                </label>
            </div>
            <?php }?> 
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingfive">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="<?php echo (!empty($filter['color']))?"true":"false";?>" aria-controls="collapse5">
            Color
        </a>
        </div>
        <div id="collapse5" class="accordion-collapse collapse <?php echo (!empty($filter['color']))?"show":"";?>" aria-labelledby="headingfive" data-bs-parent="#accordion">
        <div class="accordion-body">                    
            <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="color[]" v-model="shopFilter.color" id="black">
                <label class="form-check-label" for="black">
                    Black
                </label>
            </div>
                <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="color[]" v-model="shopFilter.color" id="blue">
                <label class="form-check-label" for="blue">
                    Blue
                </label>
            </div>
                <div class="form-check">
                <input class="form-check-input filterData" type="checkbox" name="color[]" v-model="shopFilter.color" id="grey">
                <label class="form-check-label" for="grey">
                    Grey
                </label>
            </div>
        </div>
        </div>
    </div>
</div>