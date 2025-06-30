// Load danh sách tỉnh/thành phố khi trang được tải
document.addEventListener('DOMContentLoaded', () => {
  fetch('https://vn-public-apis.fpo.vn/provinces/getAll?limit=-1')
    .then(res => res.json())
    .then(data => {
      const provinces = data.data.data;
      const provincesSelect = document.getElementById('provinces');
      provinces.forEach(province => {
        provincesSelect.innerHTML += `<option value="${province.code}">${province.name}</option>`;
      });
    })
    .catch(error => {
      console.error('Lỗi tải danh sách tỉnh:', error);
    });
});

// Hàm load danh sách quận/huyện khi chọn tỉnh
function getProvinces(event) {
  const provinceCode = event.target.value;
  const districtsSelect = document.getElementById('districts');
  const wardsSelect = document.getElementById('wards');

  districtsSelect.innerHTML = `<option value="">Chọn</option>`;
  wardsSelect.innerHTML = `<option value="">Phường/xã</option>`;
  

  if (!provinceCode) return;

  fetch(`https://vn-public-apis.fpo.vn/districts/getByProvince?provinceCode=${provinceCode}&limit=-1`)
    .then(res => res.json())
    .then(data => {
      const districts = data.data.data;
      districts.forEach(district => {
        districtsSelect.innerHTML += `<option value="${district.code}">${district.name}</option>`;
      });
    })
    .catch(error => {
      console.error('Lỗi tải danh sách quận/huyện:', error);
    });
}

// Hàm load danh sách phường/xã khi chọn quận/huyện
function getDistricts(event) {
  const districtCode = event.target.value;
  const wardsSelect = document.getElementById('wards');

  wardsSelect.innerHTML = `<option value="">Chọn</option>`;

  if (!districtCode) return;

  fetch(`https://vn-public-apis.fpo.vn/wards/getByDistrict?districtCode=${districtCode}&limit=-1`)
    .then(res => res.json())
    .then(data => {
      const wards = data.data.data;
      wards.forEach(ward => {
        wardsSelect.innerHTML += `<option value="${ward.code}">${ward.name}</option>`;
      });
    })
    .catch(error => {
      console.error('Lỗi tải danh sách phường/xã:', error);
    });
}
