class Helpers {
    unique(arr) {
        let result = [];

        for (let str of arr) {
            if (!result.includes(str)) {
                result.push(str);
            }
        }

        return result;
    }
    toggleItemInFilter(item, arr) {
        let result = arr;

        let index = arr.indexOf(item);
        if (index > -1) {
            arr.splice(index, 1);
        }
        return result;
    }
}

export default Helpers;

