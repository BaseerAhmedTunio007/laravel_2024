@php
    $furite = ['Apple' , 'Bananana' , 'Charming'];
@endphp

<script>
  // old way using javascript in laravel

  // let data = @json($furite);


  // new way javascript using laravel blade template 11
  let data = {{ Js::from($furite) }};
  data.forEach(function (entrytest) {
    console.log(entrytest);
  })
  // console.log(data);
</script>