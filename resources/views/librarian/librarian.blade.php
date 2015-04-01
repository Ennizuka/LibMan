@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-0set-1">
                    <div class ="form-group">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#">Ном бүртгэх</a></li>
                        <li><a href="#">Номын жагсаалт</a></li>
                        <li><a href="#">Оюутаны жагсаалт</a></li>
                        <li><a href="#">Тооллого</a></li>
                      </ul>
                      </div>
			<form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Номын нэр</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Зохиолч</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="disabledInput" type="text">
                      </div>
                    </div>
                    
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Байрлал</label>
                        <div class="col-sm-10">
                          <input type="text" id="disabledTextInput" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Тоо ширхэг</label>
                        <div class="col-sm-10">
                            <input type="text" id="disabledTextInput" class="form-control">
                        </div>
                      </div>
                  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Үнэ</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" >
                     </div>
                  </div> 
                   
                     
                      <div class="form-group">
                      <label class="col-sm-2 control-label">Бар код</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text">
                     </div>
                       </div> 
                             
                        <div class="form-group">
                        <label class="col-sm-2 control-label">Ангилал</label>
                        <div class="col-sm-10">
                          <select id="disabledSelect" class="form-control">
                            <option>Математик</option>
                            <option>Монгол хэл</option>
                            <option>Гадаад хэл</option>
                            <option>Мэдээлэл зүй</option>
                            <option>Түүх</option>
                            <option>Нийгмийн ухаан</option>
                            <option>Байгалийн ухаан</option>
                            <option>Хими</option>
                            <option>Биологи</option>
                            <option>Физик</option>
                            
                          </select>
                        </div>
                      </div>  
                            
	</div>
</div>
                  </div> 
                  </div> 
                 
                  </form>
                                   
		</div>
	</div>
</div>
@endsection

