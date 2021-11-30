# lava.ru

**check**
```
$api = new Lava($token);
$res = $api->ping();
```

**create payment**
```
$api = new Lava($token);
$data = new InvoiceCreateData($wallet_to, $sum);
$res = $api->invoiceCreate($data);
```