export function checkbox() {
    // document.addEventListener('DOMContentLoaded', function () {
    //     var checkboxes = document.querySelectorAll('input[type="checkbox"][name="category"]');

    //     checkboxes.forEach(function (checkbox) {
    //         checkbox.addEventListener('change', function () {
    //             // 他のすべてのチェックボックスを未選択にする
    //             checkboxes.forEach(function (otherCheckbox) {
    //                 if (otherCheckbox !== checkbox) {
    //                     otherCheckbox.checked = false;
    //                 }
    //             });

    //             // 選択されたチェックボックスに基づいて遷移
    //             if (checkbox.checked) {
    //                 switch (checkbox.value) {
    //                     case 'A':
    //                         window.location.href = '/document_type/useful'; // カテゴリーAのページに遷移
    //                         break;
    //                     case 'B':
    //                         window.location.href = '/document_type/service'; // カテゴリーBのページに遷移
    //                         break;
    //                 }
    //             }
    //         });
    //     });
    // });

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
                    window.location.href = '/document_type/' + checkbox.value;
                }
            });
        });
    });


}