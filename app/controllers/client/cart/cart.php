<?php
class Cart extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('CartModel');
  }
  public function index()
  {
    $title = 'Shopping Cart';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/cart/cart';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function checkout()
  {
    $title = 'Checkout';
    $this->data['pages_title'] = $title;
    if (empty($_SESSION['cart'])) {
      $response = new Response();
      $response->redirect('home');
    } elseif (isset($_POST['redirect'])) {
      // 9704198526191432198
      // NGUYEN VAN A
      // 07/15
      // 123456
      $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
      $vnp_Returnurl = "http://gaminggear.vn/app/views/client/cart/thanks.php";
      $vnp_TmnCode = "7O4WR25D";
      $vnp_HashSecret = "VSFLPBGUAUINIXWNNJOCWXEXGZPIUFEG";
      // $user_id = $_POST['user_id'];
      // $user_name = $_POST['user_name'];
      // $user_email = $_POST['user_email'];
      // $user_phone = $_POST['user_phone'];
      // $user_address = $_POST['user_address'];
      // $note = $_POST['note'];
      $vnp_TxnRef = rand(00, 999999);
      $vnp_OrderInfo = 'Payment content';
      $vnp_OrderType = 'billpayment';
      $vnp_Amount = $_POST['order_total'] * 2414000;
      $vnp_Locale = 'en';
      $vnp_BankCode = 'NCB';
      $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
      $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef
      );
      if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
      }
      ksort($inputData);
      $query = "";
      $i = 0;
      $hashdata = "";
      foreach ($inputData as $key => $value) {
        if ($i == 1) {
          $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
          $hashdata .= urlencode($key) . "=" . urlencode($value);
          $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
      }

      $vnp_Url = $vnp_Url . "?" . $query;
      if (isset($vnp_HashSecret)) {
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
      }
      $returnData = array(
        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
      );
      if (isset($_POST['redirect'])) {
        header('Location: ' . $vnp_Url);
        die();
      } else {
        echo json_encode($returnData);
      }
    } else {
      if (isset($_SESSION['cart'])) {
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as $item) {
          $totalPrice += ($item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce']) * $item['product_quantity'];
        }
      }
      if (isset($_POST['payCart'])) {
        $code_orders = rand(00, 999999);
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $note = $_POST['note'];
        $order_total = $_POST['order_total'];
        $data = [
          'code_orders' => $code_orders,
          'user_id' => $user_id,
          'user_name' => $user_name,
          'user_email' => $user_email,
          'user_phone' => $user_phone,
          'user_address' => $user_address,
          'order_note' => $note,
          'order_total' => $order_total,
          'order_payment' => 1,
          'order_status' => 1
        ];
        $order_id = $this->province->insertOrders($data);
        if ($order_id) {
          for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            $product_id = $_SESSION['cart'][$i]['product_id'];
            $product_price = $_SESSION['cart'][$i]['product_price'];
            $product_quantity = $_SESSION['cart'][$i]['product_quantity'];
            $total_product = $product_price * $product_quantity;
            $data = [
              'product_id' => $product_id,
              'order_id' => $order_id,
              'order_quantity' => $product_quantity,
              'order_total_product' => $total_product
            ];
            $this->province->insertOrderDetail($data);
          }

          $pay_show = 'Payment on delivery';

          $heading = "Code orders: #$code_orders";

          $body = array();
          foreach ($_SESSION['cart'] as $data) {
            $body[] = "
      <tr class='order_item'>
        <td class='td text-center' style='color: #636363;border: 1px solid #e5e5e5;padding: 12px;text-align: left;vertical-align: middle;font-family: ' Helvetica Neue', Helvetica, Roboto, Arial, sans-serif' align='left'>
        $data[product_name] </td>
        <td class='td text-center' style='color: #636363;border: 1px solid #e5e5e5;padding: 12px;text-align: left;vertical-align: middle;font-family: ' Helvetica Neue', Helvetica, Roboto, Arial, sans-serif' align='left'>
        $data[product_quantity] </td>
        <td class='td text-center' style='color: #636363;border: 1px solid #e5e5e5;padding: 12px;text-align: left;vertical-align: middle;font-family: ' Helvetica Neue', Helvetica, Roboto, Arial, sans-serif' align='left'>
          $<span class='woocommerce-Price-amount amount'>" . $data['product_price'] * $data['product_quantity'] . "<span class='woocommerce-Price-currencySymbol'></span></span>
        </td>
      </tr>
      ";
          }
          $item = implode($body);
          $mess = "<table width='100%' id='outer_wrapper' style='background-color: #f7f7f7' 'bgcolor='#f7f7f7'>
      <tbody>
        <tr>
          <td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
          <td width='600'>
            <div id='wrapper' dir='ltr' style='margin: 0 auto;padding: 70px 0;width: 100%;max-width: 600px'>
              <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tbody>
                  <tr>
                    <td align='center' valign='top'>
                      <div id='template_header_image'>
                      </div>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' id='template_container' style='background-color: #fff;border: 1px solid #dedede;border-radius: 3px' bgcolor='#fff'>
                        <tbody>
                          <tr>
                            <td align='center' valign='top'>
                              <!-- Header -->
                              <table border='0' cellpadding='0' cellspacing='0' width='100%' id='template_header' style='background-color: #000000;color: #fff;border-bottom: 0;font-weight: bold;line-height: 100%;vertical-align: middle;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius: 3px 3px 0 0' bgcolor='#000000'>
                                <tbody>
                                  <tr>
                                    <td id='header_wrapper' class='bg-dark' style='padding: 36px 48px;display: block'>
                                      <h1 style='font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 30px;font-weight: 300;line-height: 150%;margin: 0;text-align: left;color: #fff;'>Thank you for your purchase</h1>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!-- End Header -->
                            </td>
                          </tr>
                          <tr>
                            <td align='center' valign='top'>
                              <!-- Body -->
                              <table border='0' cellpadding='0' cellspacing='0' width='100%' id='template_body'>
                                <tbody>
                                  <tr>
                                    <td valign='top' id='body_content' style='background-color: #fff' bgcolor='#fff'>
                                      <!-- Content -->
                                      <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                        <tbody>
                                          <tr>
                                            <td valign='top' style='padding: 48px 48px 32px'>
                                              <div id='body_content_inner' style='color: #636363;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 14px;line-height: 150%;text-align: left' align='left'>
                                                <p style='margin: 0 0 16px'><b>Gaming Gear</b> Hello</p>
                                                <p style='margin: 0 0 16px'>Your order is awaiting confirmation and will be sent soon!</p>
                                                <h2 style='color: #7f54b3;display: block;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 18px;font-weight: bold;line-height: 130%;margin: 0 0 18px;text-align: left'>
                                                  [Code Orders: $code_orders] (" . date("F j, Y H:i:s") . ") </h2>
                                                <div style='margin-bottom: 40px'>
                                                  <table class='td' cellspacing='0' cellpadding='6' border='1' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;width: 100%;font-family: ' Helvetica Neue', Helvetica, Roboto, Arial, sans-serif' width='100%'>
                                                    <thead>
                                                      <tr>
                                                        <th class='td' scope='col' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left' align='left'>Product</th>
                                                        <th class='td' scope='col' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left' align='left'>Quantity</th>
                                                        <th class='td' scope='col' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left' align='left'>Price</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      $item
                                                    </tbody>
                                                    <tfoot>
                                                      <tr>
                                                        <th class='td' scope='row' colspan='2' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>Subtotal:</th>
                                                        <td class='td' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>$<span class='woocommerce-Price-amount amount'>" . $order_total . "<span class='woocommerce-Price-currencySymbol'></span></span></td>
                                                      </tr>
                                                      <tr>
                                                        <th class='td' scope='row' colspan='2' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>Shipping</th>
                                                        <td class='td' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'><span class='woocommerce-Price-amount amount'>Gratis<span class='woocommerce-Price-currencySymbol'></span></span></td>
                                                      </tr>
                                                      <tr>
                                                        <th class='td' scope='row' colspan='2' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>Payment:</th>
                                                        <td class='td' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>$pay_show</td>
                                                      </tr>
                                                      <tr>
                                                        <th class='td' scope='row' colspan='2' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>Total:</th>
                                                        <td class='td' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>$<span class='woocommerce-Price-amount amount'>" . $order_total . "<span class='woocommerce-Price-currencySymbol'></span></span></td>
                                                      </tr>
                                                      <tr>
                                                        <th class='td' scope='row' colspan='2' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>Note:</th>
                                                        <td class='td' style='color: #636363;border: 1px solid #e5e5e5;vertical-align: middle;padding: 12px;text-align: left;' align='left'>$note</td>
                                                      </tr>
                                                    </tfoot>
                                                  </table>
                                                </div>

                                                <table id='addresses' cellspacing='0' cellpadding='0' border='0' style='width: 100%;vertical-align: top;margin-bottom: 40px;padding: 0' width='100%'>
                                                  <tbody>
                                                    <tr>
                                                      <td valign='top' width='50%' style='text-align: left;font-family: ' Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;border: 0;padding: 0' align='left'>
                                                        <h2 style='color: #7f54b3;display: block;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 18px;font-weight: bold;line-height: 130%;margin: 0 0 18px;text-align: left'>Payment address</h2>
                                                        <address class='address' style='padding: 12px;color: #636363;border: 1px solid #e5e5e5'>
                                                        $user_name <br>
                                                        $user_address <br>
                                                          <a href='tel:$user_phone' style='color: #7f54b3;font-weight: normal;text-decoration: underline'>$user_phone</a> 
                                                          <br>$user_email
                                                        </address>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                <p style='margin: 0 0 16px'>Thank you for trusting and purchasing our products!</p>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!-- End Content -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!-- End Body -->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </td>
          <td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
        </tr>
      </tbody>
    </table> ";

          require './app/core/PHPMailer-master/src/Exception.php';
          require './app/core/PHPMailer-master/src/PHPMailer.php';
          require './app/core/PHPMailer-master/src/SMTP.php';

          $email = $user_email;
          $mail = new PHPMailer\PHPMailer\PHPMailer();
          $mail->IsSMTP();
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'tls';
          $mail->Host = 'smtp.gmail.com';
          $mail->Port = '587';
          $mail->Username = 'huylppc05334@fpt.edu.vn';
          $mail->Password = 'lenl ztdz evcs foia';
          $mail->FromName = 'GWine';
          $mail->addAddress($email);
          $mail->Subject = $heading;
          $mail->isHTML(TRUE);
          $mail->Body = $mess;
          if (!$mail->send()) {
            exit();
          }
        }
        unset($_SESSION['cart']);
        $response = new Response();
        $response->redirect('thanks');
      }
      $this->data['sub_content']['totalPrice'] = $totalPrice;
      $this->data['css_checkout'] = _WEB_ROOT . '/public/assets/client/css/cart.css';
      $this->data['link_checkout_1'] = 'https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous"';
      $this->data['link_checkout_2'] = "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'";
      $this->data['content'] = 'client/cart/checkout';
      $this->render('client/layoutClient/client_layout', $this->data);
    }
  }
  public function thanks()
  {
    if (empty($_SESSION['cart'])) {
      $response = new Response();
      $response->redirect('home');
    } else {
      $title = 'Thanks';
      $this->data['pages_title'] = $title;
      $this->data['sub_content']['product'] = [];
      $this->data['css_thanks'] = _WEB_ROOT . '/public/assets/client/css/thanks.css';
      $this->data['content'] = 'client/cart/thanks';
      $this->render('client/layoutClient/client_layout', $this->data);
    }
  }
}
