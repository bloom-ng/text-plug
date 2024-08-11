<div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md">
  <div class="flex items-center">
      <img src="path/to/your-image.jpg" alt="User Image" class="w-12 h-12 rounded-full mr-4">
      <div>
          <p class="text-gray-600 font-semibold">Oladimeji Abubakar</p>
          <p class="text-sm text-gray-500">User</p>
      </div>
  </div>
  <p class="mt-4 text-gray-700">
      "TextPlug made verifying my accounts a breeze! Their temporary numbers worked like a charm, and I felt much more secure online. Highly recommended!"
  </p>
</div>






<div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg px-5 py-4">
  <p class="text-[#F59E0B] text-lg">★★★★★</p>
  <div class="flex items-center">
    <img src="/img/Oval (2).png" alt="User" class="w-8 h-8 rounded-full mr-2">
    <div>
        <p class="text-lg text-gray-600 font-semibold">Sarah L</p>
        <p class="text-sm text-gray-500">User</p>
    </div>
</div>
  


      <div class="max-w-md mx-auto bg-orange-100 p-6 rounded-lg shadow-lg">
        <p class="text-gray-700 text-base mb-4">
          "TextPlug made verifying my accounts a breeze! Their temporary numbers worked like a charm, and I felt much more secure online. Highly recommended."
        </p>
        <p class="text-yellow-500 text-lg">★★★★★</p> <!-- Rating stars -->
        <p class="text-gray-500 text-xs">Oladimeji Abubakar, User</p>
      </div>


      










    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>