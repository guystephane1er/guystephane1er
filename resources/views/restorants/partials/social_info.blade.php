<br />
<h6 class="heading-small text-muted mb-4">{{ __('Accepting Payments') }}</h6>
<!-- Payment explanation -->
@include('partials.fields',['fields'=>[
    ['required'=>false,'ftype'=>'input','placeholder'=>"information de paiement",'name'=>'Information de paiement', 'additionalInfo'=>'ex. Nous acceptons le paiement à la livraison, mobile money et le paiement à l\'enlèvement', 'id'=>'payment_info', 'value'=>$restorant->payment_info]
]])



