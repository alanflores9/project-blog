  @component('layouts.page_dashboard.app')
   <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">

       <!-- Default box -->
       <div class="box">
           <div class="box-header with-border">
               <h3 class="box-title">Title</h3>

               <div class="box-tools pull-right">
                   <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                           title="Collapse">
                       <i class="fa fa-minus"></i></button>
                   <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                       <i class="fa fa-times"></i></button>
               </div>
           </div>
           <div class="box-body">
               <form action="/dashboard/assistance-detail" method="post">
                   @csrf
                  
                            <div class="form-group">
                                <label for="name">Numero</label>
                                <input name='number' type="text" class="form-control" id="numero" placeholder="Numero">
                            </div>
                            <div class="form-group">
                                <label for="data_arrive">Fecha</label>
                                <input name='data_arrive' id="data_arrive" type="date">
                            </div>

                            
                            <div class="form-group">
                                <label for="Inputselect">Estado</label>
                                <select id="state" name="state" class="form-control" >
                                    <option value="1">Habilitado</option>
                                    <option value="0">Inhabilitado</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="details">Detalle</label>
                                <input name='detail' type="text" class="form-control" id="detail" placeholder="detalle">
                            </div>
                            <div class="form-group">
                                <label for="cost">Costo</label>
                                <input name='cost' type="text" class="form-control" id="costo" placeholder="costo">
                            </div>
                        
                   <button type="submit">Guardar</button>
               </form>
           </div>
           <!-- /.box-body -->
           <div class="box-footer">
               Footer
           </div>
           <!-- /.box-footer-->
       </div>
       <!-- /.box -->

   </section>
   <!-- /.content -->

    @endcomponent