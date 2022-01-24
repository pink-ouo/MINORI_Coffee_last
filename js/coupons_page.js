// ticket card
const hc_ticket = document.querySelector(".hc-coupon-list");
var hc_coupons = document.querySelector(".hc-coupons");
// 定義物件
let getTicket = `{
        "ticket": [
        {
            "id": 1,
            "price": 100,
            "date": "111年12月31日",
            "target":"給所有商品使用"
        },
        {
            "id": 2,
            "price": 150,
            "date": "111年11月31日",
            "target":"給所有商品使用"
        },
        {
            "id": 3,
            "price": 100,
            "date": "111年11月31日",
            "target":"給豆單商品使用"
        },
        {
            "id": 4,
            "price": 200,
            "date": "111年12月31日",
            "target":"給咖啡器材使用"
        }
        
    ]
}`;

let obj_ticket = JSON.parse(getTicket);
let ticket_length = obj_ticket["ticket"].length;
// console.log("obj length:", ticket_length);

// for(_of_) 撈物件
for (var key of obj_ticket["ticket"]) {
    if (key.id > 0) {
        let create_hc_ticket = document.createElement("div");
        // add class name
        create_hc_ticket.classList.add("hc-coupon-list");
        // add element
        create_hc_ticket.innerHTML = `<div class="hc-coupon-ticket">
                                    <div class="hc-coupon-ticket-bg">
                                       <h5 class="hc-ticket-title">${"折扣 NT$"}<span>${key.price}</span></h5>
                                       <p>${key.target}</p>
                                    </div>
                                  </div>

                                  <div class="hc-coupon-content">
                                    <p>${"使用期限"}</p>
                                    <div>${key.date}</div>
                                    <button class="hc-coupon-btn">${"領取"}</button>
                                  </div>`;
        hc_coupons.appendChild(create_hc_ticket);

    }
}

