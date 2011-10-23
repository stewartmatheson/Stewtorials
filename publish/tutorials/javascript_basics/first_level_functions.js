var wrapInTag = function(tag, content){
    t = '<' + tag + '>' + content + '</' + tag + '>';
    return t;
}

wrapInTag('p', 'Hello World'); //<p>Hello World</p>