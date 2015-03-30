@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-0set-1">
                    <div class ="form-group">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#">Оюутан</a></li>
                        <li><a href="#">Багш</a></li>
                        <li><a href="#">Номын санч</a></li>
                        <li><a href="#">Нягтлан</a></li>
                      </ul>
                      </div>
			<form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Овог</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Нэр</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="disabledInput" type="text">
                      </div>
                    </div>
                    
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Регистрийи дугаар</label>
                        <div class="col-sm-10">
                          <input type="text" id="disabledTextInput" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Хүйс</label>
                        <div class="col-sm-10">
                          <select id="disabledSelect" class="form-control">
                            <option>Эр</option>
                            <option>Эм</option>
                            
                          </select>
                        </div>
                      </div>
                  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">И-мэйл</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" >
                     </div>
                  </div> 
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Элссэн он</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" >
                     </div>
                  </div> 
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Төлбөр</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text">
                     </div>
                       </div> 
                     
                      <div class="form-group">
                      <label class="col-sm-2 control-label">Утас</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text">
                     </div>
                       </div> 
                             <div class="form-group">
                      <label class="col-sm-2 control-label">Нэвтрэх нэр</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text">
                     </div>
                       </div> 
                        <div class="form-group">
                        <label class="col-sm-2 control-label">Төлөв</label>
                        <div class="col-sm-10">
                          <select id="disabledSelect" class="form-control">
                            <option>Суралцаж байгаа</option>
                            <option>Төгссөн</option>
                            <option>Шилжсэн</option>
                            
                          </select>
                        </div>
                      </div>    
                  </div> 
                  </div> 
                 
                  </form>
                                   
		</div>
	</div>
</div>
@endsection

