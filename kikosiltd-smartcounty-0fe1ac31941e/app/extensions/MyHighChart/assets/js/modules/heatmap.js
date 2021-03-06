(function(a) {
        var k = a.seriesTypes, l = a.each;
        k.heatmap = a.extendClass(k.map, {colorKey: "z", useMapGeometry: !1, pointArrayMap: ["y", "z"], translate: function() {
                        var c = this, a = c.options, i = Number.MAX_VALUE, j = Number.MIN_VALUE;
                        c.generatePoints();
                        l(c.data, function(b) {
                                var e = b.x, f = b.y, d = b.z, g = (a.colsize || 1) / 2, h = (a.rowsize || 1) / 2;
                                b.path = ["M", e - g, f - h, "L", e + g, f - h, "L", e + g, f + h, "L", e - g, f + h, "Z"];
                                b.shapeType = "path";
                                b.shapeArgs = {d: c.translatePath(b.path)};
                                typeof d === "number" && (d > j ? j = d : d < i && (i = d))
                        });
                        c.translateColors(i, j)
                }, getBox: function() {
                },
                getExtremes: a.Series.prototype.getExtremes})
})(Highcharts);
