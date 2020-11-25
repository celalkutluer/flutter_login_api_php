# Kullanılan araçlar
MySQL
PHP
Flutter
HTTP REQUEST/RESPONSE APİ

Uygulamada Login işleminin api aracılığı ile yapılması amaçlanmış bu doğrultuda api işlemleri için bir php sayfası tasarlanmıştır.
Kullanıcı eposta ve şifresi ile giriş yapmakta. Butona tıklandığında php sayfasına get işlemi yapılmakta php sayfası mysql de eposta ve şifre doğruluğuu kontrol ettiğinde geriye uygulamanın ilerki api talepleri için bir token, giriş yapan kullanıcının id si ve işlem başarı duumunu json formatında döndürmekte. flutter da json parse edilerek veriler işlenmektedir.
Bunun yanı sıra shared referance da kullanılarak oturumun kybılmaması sağlanmıştır. kullanıcı uygulamaya her giriş yaptığında token değiştiğinden bunu kötü yanı api güvenliğinde zafiyet olabilir
