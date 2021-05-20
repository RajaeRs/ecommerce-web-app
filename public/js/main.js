function getCatProducts($id) {
    const input = document.querySelector("#cat_id");
    const form = document.querySelector("#catPro");
    input.value = $id;
    form.submit();
  }