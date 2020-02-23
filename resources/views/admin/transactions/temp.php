<!-- <div class="form-group">
      {!! Form::label('client_id', 'Clients:') !!}
      {!! Form::select('client_id[]', $clients, null,['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
      {!! Form::label('type', 'type:') !!}
      {!! Form::select('type[]', $clients, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('description1', 'Desc 1:') !!}
      {!! Form::select('description1[]', $descriptions, null, ['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
      {!! Form::label('amount1', 'Amt 1:') !!}
      {!! Form::text('retainer[]', $clients, null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::submit('Create Client', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div> -->


<div class="form-group">
  <input type="text" name="id[]" value="{{$client->id}}" class="form-control">
</div>

<div class="form-group">
  <input type="text" name="retainer[]" value="{{$client->retainer}}" class="form-control">
</div>

<!-- <div class="form-group">
      {!! Form::label('id', 'Id:') !!}
      {!! Form::text('id[]', null, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('retainer', 'Retainer:') !!}
      {!! Form::text('retainer[]', null, ['class'=>'form-control'])!!}
    </div> -->

foreach ($transactions as $transaction) {
$values = new Transaction();
$values->client_id = $client["id"];
$values->amount1 = $client["retainer"];
$values->save();


}

<!-- <td>{{$transaction->created_at->format('M/d/Y')}}</td> -->