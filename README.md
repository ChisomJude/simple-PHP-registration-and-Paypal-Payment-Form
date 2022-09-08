# Simple-PHP-registration-and-Paypal-Payment-Form
This project explains one way to add Paypal payment button to your PHP forms. They are different options to connect your forms with paypal payment buttons but in this project we will be using the Paypay smart buttons. 

**How to use PayPal Smart Buttons**
- Visit https://www.paypal.com/buttons/smart
- Create button with  fixed Price
- Copy Button code and paste exact where you want this to appear -example  below

```js
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":100}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

```

- Pay attention to the first script tag. If **client-id=sb** this means your account is on sandbox mode, once you turn account to Live mode, copy and replace your client-id 

```js
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  
```
- Again, Paypal api have options to allow you disable and enable some functionalities within the first script tag,see example `disable-funding=paylater&enable-funding=credit,card&currency=USD` where paylater option is disable, enabled funding via card and credit.

```js
<script src="https://www.paypal.com/sdk/js?client-id=sb&disable-funding=paylater&enable-funding=credit,card&currency=USD" 
 data-sdk-integration-source="button-factory"></script>
```
- Again, you can choose to pass a variable to capture user amount instead of just using a fixed price. Here I passed `<?php echo $amount ?>`

```js
createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":<?php echo $amount ?">}}]
          });
        },
```
- You can visit [paypal sdk cofigurations](https://developer.paypal.com/sdk/js/configuration/) for more details



##### *If you find this helpful, feel free to star this project, fork or download on your project.* 

