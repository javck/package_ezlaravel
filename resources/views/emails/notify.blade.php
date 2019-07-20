@extends('layouts.mail')

@section('content')
	<table cellpadding="0" cellspacing="0" width="600" class="w320">
        <tr>
          <td class="item-table">
            <table cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <td class="title-dark" width="300">
                   Item
                </td>
                <td class="title-dark" width="163">
                  Qty
                </td>
                <td class="title-dark" width="97">
                  Total
                </td>
              </tr>


              <tr>
                <td class="item-col item">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td class="mobile-hide-img">
                        <a href=""><img width="110" height="92" src="http://s3.amazonaws.com/swu-filepicker/RPezUIwPRv8pjatAAH1E_item_images_19.jpg" alt="item1"></a>
                      </td>
                      <td class="product">
                        <span style="color: #4d4d4d; font-weight:bold;">Golden Earings</span> <br />
                        Hot city looks
                      </td>
                    </tr>
                  </table>
                </td>
                <td class="item-col quantity">
                  1
                </td>
                <td class="item-col">
                  $3.50
                </td>
              </tr>


              <tr>
                <td class="item-col item">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td class="mobile-hide-img">
                        <a href=""><img width="110" height="92" src="http://s3.amazonaws.com/swu-filepicker/9wRy50HQTg2CTyZA5Ozi_item_images_16.jpg" alt="item2"></a>
                      </td>
                      <td class="product">
                        <span style="color: #4d4d4d; font-weight: bold;">Pink Shoes</span> <br />
                        Newest styles
                      </td>
                    </tr>
                  </table>
                </td>
                <td class="item-col quantity">
                  1
                </td>
                <td class="item-col price">
                  $10.50
                </td>
              </tr>


              <tr>
                <td class="item-col item mobile-row-padding"></td>
                <td class="item-col quantity"></td>
                <td class="item-col price"></td>
              </tr>


              <tr>
                <td class="item-col item">
                </td>
                <td class="item-col quantity" style="text-align:right; padding-right: 10px; border-top: 1px solid #cccccc;">
                  <span class="total-space">Subtotal</span> <br />
                  <span class="total-space">Tax</span>  <br />
                  <span class="total-space">Shipping</span> <br />
                  <span class="total-space" style="font-weight: bold; color: #4d4d4d">Total</span>
                </td>
                <td class="item-col price" style="text-align: left; border-top: 1px solid #cccccc;">
                  <span class="total-space">$13.02</span> <br />
                  <span class="total-space">$0.75</span>  <br />
                  <span class="total-space">$1.00</span>  <br />
                  <span class="total-space" style="font-weight:bold; color: #4d4d4d">$15.77</span>
                </td>
              </tr>  
            </table>
          </td>
        </tr>
    </table>
@stop