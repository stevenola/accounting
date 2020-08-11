@extends('layouts.blank')


<div style="page-break-before: always">

  <div style="margin-bottom: 550px" class="container mt-5">

    <div class="row">

      <div class="col-md-4">
        <div class="pt-2 pb-3">
          <h4><b>Remit To:</b></h4>
        </div>
        <div class="">

          <h4 class="">Avalon Retail Consulting, Inc.</h4>
          <h4 class="">625 Short Street</h4>
          <h4 class="">New Orleans, LA 70118</h4>

        </div>
      </div>

      <div class="col-md-5">

      </div>
      <div class="border border-dark col-md-3 h-50">
        <div class="pt-2 pb-3">
          <h4><b>Date::</b></h4>
        </div>
        <div class="">

          <h4 class="">{{$transaction->created_at->format('M/d/Y')}}</h4>

        </div>
        <div class="pt-2 pb-3">
          <h4><b>Invoice No:</b></h4>
        </div>
        <div class="">

          <h4 class="">{{$transaction->id}}</h4>



        </div>
      </div>
    </div>
    <br>


    <div class="row">
      {{-- <div class="col-md-3"> --}}
      <div class="col-6">
        <div class="pt-2 pb-3">
          <h4><b>Bill To:</b></h4>
        </div>
        <div class="">

          <h4 class=""></h4>
          <h4 class="">{{$transaction->client->name}}</h4>
          <h4 class="">{{$transaction->client->street}}</h4>
          <h4 class="">{{$transaction->client->city}} , {{$transaction->client->state}} {{$transaction->client->zip}}</h4>

        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="border border-dark col-md-9">
        <div class="pt-3 pb-3">
          <h4><b>Item</b></h4>
        </div>

      </div>
      <div class="border border-dark col-md-3">
        <div class="pt-3 pb-3">
          <h4> <b>Amount</b></h4>
        </div>
      </div>


    </div>

    <div class="row">
      <div class="pt-3 pb-3 border border-dark col-md-9">

        <div class="">

          <h4 class="">{{$transaction->description->name}}</h4>


        </div>
      </div>

      <div class="pt-3 pb-3 border border-dark col-md-3">

        <div class="">

          <h4 class="">${{$transaction->amount1}}</h4>

        </div>
      </div>

    </div>

    <!-- Row Two -->
    @if ($transaction->amount2 > 0)
    <div class="row">
      <div class="pt-3 pb-3 border border-dark col-md-9">

        <div class="">

          <h4 class="">{{$transaction->description2}}</h4>


        </div>
      </div>


      <div class="pt-3 pb-3 border border-dark col-md-3">

        <div class="">

          <h4 class="">${{$transaction->amount2}}</h4>

        </div>
      </div>

    </div>
    @endif

  </div>


  <footer>
    <div class="container justify-right">
      <div class="bottom-footer">
        <div class="row">
          <div class="col-md-9"></div>

          <div class="border border-dark col-md-3">
            <div class="pt-2 pb-3">
              <h4> <b>Payment due in month date of invoice</b>
            </div>
            <div class="">

              <!-- <h4 class="">Total: {{$transaction->amount1}} + {{$transaction->amount2}}</h4> -->
              <h4>${{$transaction->amount1 + $transaction->amount2}}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <br>
  <br>
  <br>
  <br>

</div>