function JsonStorage(name) {
    this.length = 0;

    var storageName = name;
    var storage = localStorage.getItem(storageName);
    var data = storage == null ? {} : JSON.parse(storage);

    for (var key in data) {
        this.length++;
    }

    this.getItem = function (key) {
        if (!key) return null;
        if (typeof data[key] == 'undefined') return null;
        return data[key];
    };

    this.setItem = function (key, val) {
        if (typeof key != 'string') return;
        if (typeof val == 'undefined') return;
        if (typeof data[key] == 'undefined') {
            this.length++;
        }
        data[key] = val;
        localStorage.setItem(storageName, JSON.stringify(data));
    };

    this.addItem = function (val) {
        if (typeof val == 'undefined') return;
        var id = 'uniqid_' + Math.random().toString(36).substr(2, 9);
        while (typeof data[id] != 'undefined') {
            var id = 'uniqid_' + Math.random().toString(36).substr(2, 9);
        }
        this.setItem(id, val);
        return id;
    };

    this.removeItem = function (key) {
        if (!key) return null;
        if (typeof data[key] == 'undefined') return null;
        delete data[key];
        this.length--;
        localStorage.setItem(storageName, JSON.stringify(data));
    };

    this.clear = function () {
        data = {};
        this.length = 0;
        localStorage.removeItem(storageName);
    };

    this.key = function (ind) {
        var i = 0;
        for (var key in data) {
            if (i == ind) return key;
            i++;
        }
        return null;
    };

    this.foreach = function (fct) {
        if (typeof fct != 'function') return;
        for (var key in data) {
            fct(key, this.getItem(key));
        }
    };

    this.itemsToArray = function () {
        var items = [];
        this.foreach(function (key, item) {
            items.push(item);
        });
        return items;
    };

    this.keysToArray = function () {
        var keys = [];
        this.foreach(function (key, item) {
            keys.push(key);
        });
        return keys;
    };

    this.toArray = function () {
        var all = [];
        for (var key in data) {
            var item = this.getItem(key);
            all.push({key: key, item: item});
        }
        return all;
    };

    this.toJson = function () {
        return localStorage.getItem(storageName);
    }

}
////jsonStorage = {
//    "setItem": function (key, val) {
//        localStorage.setItem(key, JSON.stringify(val));
//    },
//    "getItem": function (key) {
//        return JSON.parse(localStorage.getItem(key));
//    },
//    "removeItem": function (key) {
//        localStorage.removeItem(key);
//    }
//}