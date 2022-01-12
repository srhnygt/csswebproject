<?php include("head.php"); ?>

   <div id="content" class="contact">
          <h1 class="contact-title">İletişim</h1>
          <div class="contact-form">
              <h2>Bana Ulaşın</h2>
                  <div class="labels"> 
                    <form action="">
                      <label for="name">Adınız:<input type="text" name="name" required></label>
                      <label for="surname">Soyadınız:<input type="text" name="surname" required></label>
                      <label for="surname">Yaşınız:<input type="text" name="age" required></label>
                      <label for="surname">Telefon Numaranız:<input type="number" name="phone" minlenght="11" maxlenght="11" required></label>
                      <label for="surname">E-postanız:<input type="email" name="email" min-lenght="8" required></label>
                      <label for="gender1">Erkek<input type="radio" value="Man" name="gender" id="gender1"></label>
                      <label for="gender2">Kadın<input type="radio" value="Woman" name="gender" id="gender2"></label>
                      <select name="country" id="country">
                        <option value="0">Ülke/Bölge seçiniz</option>
                        <option value="1">Türkiye</option>
                        <option value="2">Azerbaycan</option>
                        <option value="3">Rusya</option>
                        <option value="4">Avrupa</option>
                        <option value="5">Amerika</option>
                        <option value="6">Kanada</option>
                      </select>
                    </form>
                   </div>
                   <div class="request">
                    <label for="request">Bir resim isteğim var</label>
                    <input type="checkbox" name="request" id="request">

                       <form action="">
                       <label for="types">Resim Seçiniz:</label>
                       <select name="types" id="types">
                           <optgroup label="Canlı Resimler">
                             <option value="1">Natürmort</option>
                             <option value="2">Peyzaj</option>
                             <option value="3">Enteriyör</option>
                             <option value="4">Soyut</option>
                           </optgroup>
                           <optgroup label="Karakalem Resimler">
                           <option value="5">Portre</option>
                           <option value="6">Figür</option>
                           <option value="7">Minyatür (Özel)</option>
                           </optgroup>
                       </select>
                       <label for="expression">İsteğinizi Açıklayın</label>
                       <textarea name="expression" id="expression" cols="25" rows="15"></textarea>
                       </form> 
                   </div>
                    <div class="message">
                        <form action="">
                        <select name="subject" id="subject">
                            <option value="0">Konu Seçiniz</option>
                            <option value="1">Dilek</option>
                            <option value="2">Şikayet</option>
                            <option value="3">Öneri</option>
                            <option value="4">Soru</option>
                            <option value="5">Sipariş</option>
                        </select>
                        <label for="title">Konu Başlığı ve Postanız:</label>
                        <input type="text" name="title" required>
                        <textarea name="mail" id="mail" cols="30" rows="17"></textarea>
                        </form>
                        
                    </div>
                    <input type="submit" value="Gönder">
          </div>
   </div>


<?php include("foot.php"); ?>