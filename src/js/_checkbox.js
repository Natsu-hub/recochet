// import { jQuery };
export function checkbox() {

    document.addEventListener('DOMContentLoaded', function () {
        var checkboxes = document.querySelectorAll('input[type="checkbox"][name="category"]');

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                // 他のすべてのチェックボックスを未選択にする
                checkboxes.forEach(function (otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });

                // 選択されたチェックボックスに基づいて遷移
                if (checkbox.checked) {
                    window.location.href = '/download_type/' + checkbox.value;
                }
            });
        });
    });


}