jQuery(document).ready($ => {
    $(document).on('change', '#shipping_method input', (e)=>{
        let val = $(e.target).val();
        toggle_picker(val)
    })

    setTimeout((e) =>{
      let val = $('#shipping_method input:checked').val();
      console.log(val);
      toggle_picker(val)
    }, 800)


  function toggle_picker(val) {
    if ('local_pickup:1' === val) {
      $('#coderockz_woo_delivery_delivery_date_section').hide();
      $('#coderockz_woo_delivery_delivery_time_section').hide();
      $('#coderockz_woo_delivery_pickup_date_section').show();
      $('#coderockz_woo_delivery_pickup_time_section').show();
      $('.shipping_address').hide();
    } else {
      $('#coderockz_woo_delivery_pickup_date_section').hide();
      $('#coderockz_woo_delivery_pickup_time_section').hide();
      $('#coderockz_woo_delivery_delivery_date_section').show();
      $('#coderockz_woo_delivery_delivery_time_section').show();
      $('.shipping_address').show()
    }
  }

  $(document).on('click', '.delete', (e) => {
    setTimeout((e) =>{
      $(document.body).trigger('update_checkout');

    }, 200)

  })
})


//coderockz_woo_delivery_delivery_date_section
//coderockz_woo_delivery_delivery_time_section

//coderockz_woo_delivery_pickup_date_section
//coderockz_woo_delivery_pickup_time_section
