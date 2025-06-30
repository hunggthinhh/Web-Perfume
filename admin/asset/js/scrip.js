const menuli = document.querySelectorAll('.admin-sidebar-content > ul > li > a');
const subMenus = document.querySelectorAll('.sub-menu');

menuli.forEach((menuItem) => {
    menuItem.addEventListener('click', (e) => {
        e.preventDefault(); // Ngăn hành vi mặc định

        // Lấy sub-menu tương ứng với mục được click
        const parentLi = menuItem.parentNode;
        const subMenu = parentLi.querySelector('.sub-menu');

        // Nếu không có submenu thì không làm gì cả
        if (!subMenu) return;

        // Toggle: Nếu sub-menu đang mở thì đóng lại, nếu đang đóng thì mở ra
        const isOpen = subMenu.style.height && subMenu.style.height !== "0px";

        // Đặt tất cả sub-menu về height: 0
        subMenus.forEach((sm) => sm.style.height = "0px");

        // Nếu đang đóng, thì mở submenu này ra
        if (!isOpen) {
            subMenu.style.height = subMenu.scrollHeight + "px";
        }
    });
});
// Cho vào cuối trang trước </body>
// Đặt cuối file hoặc trước </body>
document.addEventListener('DOMContentLoaded', function() {
    var menu = document.getElementById('avatarMenu');
    var dropdown = document.getElementById('avatarDropdown');
    var arrow = document.getElementById('avatarArrow');
  
    arrow.addEventListener('click', function(e) {
      e.stopPropagation();
      dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
      menu.classList.toggle('active', dropdown.style.display === 'block');
    });
  
    // Click vào vùng avatar cũng xổ menu (tùy chọn, có thể bỏ nếu chỉ muốn click icon)
    menu.querySelector('.avatar-circle').addEventListener('click', function(e) {
      e.stopPropagation();
      dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
      menu.classList.toggle('active', dropdown.style.display === 'block');
    });
  
    document.addEventListener('click', function() {
      dropdown.style.display = 'none';
      menu.classList.remove('active');
    });
  });