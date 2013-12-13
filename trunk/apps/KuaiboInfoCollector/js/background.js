function InsertFunc(tabId, changeInfo, tab) {
    if (changeInfo.status == "loading") {
        return false;
    }
    chrome.tabs.executeScript(tabId, { file: "js/jquery-1.10.2.min.js" });
    chrome.tabs.executeScript(tabId, { file: "js/common.js" });
    if(tab.url.indexOf("barr.kuaibo.com")>-1){
        chrome.tabs.executeScript(tabId, { file: "js/barr.kuaibo.js" });
    }
}
//注册事件的响应函数
chrome.tabs.onUpdated.addListener(InsertFunc);