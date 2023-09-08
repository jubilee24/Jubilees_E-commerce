<?php include('partials-front/cart-front.php'); ?>

    <section class="about-header">
      <h2>Contact Us</h2>
      <p>Leave a message, We love to hear from you</p>
    </section>

    <section id="cart" class="section-p1">
      <table width="100%">
        <thead>
          <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="#"><i class="far fa-times-circle"></i></a>
            </td>
            <td><img src="img/products/f1.jpg" alt="" /></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>$118.19</td>
            <td><input type="number" value="1" /></td>
            <td>$118.19</td>
          </tr>
          <tr>
            <td>
              <a href="#"><i class="far fa-times-circle"></i></a>
            </td>
            <td><img src="img/products/f2.jpg" alt="" /></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>$118.19</td>
            <td><input type="number" value="1" /></td>
            <td>$118.19</td>
          </tr>
          <tr>
            <td>
              <a href="#"><i class="far fa-times-circle"></i></a>
            </td>
            <td><img src="img/products/f3.jpg" alt="" /></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>$118.19</td>
            <td><input type="number" value="1" /></td>
            <td>$118.19</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section id="cart-add" class="section-p1">
      <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
          <input type="text" placeholder="Enter Your Coupon" />
          <button class="normal">Apply</button>
        </div>
      </div>

      <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
          <tr>
            <td>Cart Subtotal</td>
            <td>$118.19</td>
          </tr>
          <tr>
            <td>Shipping</td>
            <td>Free</td>
          </tr>
          <tr>
            <td><strong>Total</strong></td>
            <td><strong>$118.19</strong></td>
          </tr>
        </table>

        <button class="normal">Proceed to Checkout</button>
      </div>
    </section>

    <?php include('partials-front/footer.php') ?>

