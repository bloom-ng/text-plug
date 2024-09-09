<x-admin-dashboard activePage="wallet" page="Deposits">
    <div class="w-full flex lg:flex-row flex-col-reverse gap-10 xl:gap-14">
        <div class="flex bg-white w-full lg:w-[80%] lg:h-[290px] h-fit shadow-lg rounded-xl px-8 pb-8">
            <div class="w-full flex flex-col leading-tight">
                <h1 class="dm-sans-medium text-[#222222] lg:text-2xl text-[28px] font-semibold mt-4">
                    Overview
                </h1>
                <p class="dm-sans-medium lg:text-[12px] text-[14px] text-[#22222299]">
                    Your Account Summary
                </p>

                <div class="w-full gap-10 lg:gap-6 flex lg:flex-row flex-col justify-center">
                    <div class="bg-[#FFE2E5] w-full h-[138px] shadow-lg mt-7 rounded-xl">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-4 mt-4">
                            <circle cx="15" cy="15" r="15" fill="#FA5A7D" />
                            <path
                                d="M10.5 21C9.675 21 8.96875 20.7063 8.38125 20.1188C7.79375 19.5313 7.5 18.825 7.5 18V12C7.5 11.175 7.79375 10.4688 8.38125 9.88125C8.96875 9.29375 9.675 9 10.5 9H19.5C20.325 9 21.0313 9.29375 21.6188 9.88125C22.2063 10.4688 22.5 11.175 22.5 12V18C22.5 18.825 22.2063 19.5313 21.6188 20.1188C21.0313 20.7063 20.325 21 19.5 21H10.5ZM10.5 12H19.5C19.775 12 20.0375 12.0312 20.2875 12.0938C20.5375 12.1562 20.775 12.2562 21 12.3937V12C21 11.5875 20.8533 11.2345 20.5597 10.941C20.2662 10.6475 19.913 10.5005 19.5 10.5H10.5C10.0875 10.5 9.7345 10.647 9.441 10.941C9.1475 11.235 9.0005 11.588 9 12V12.3937C9.225 12.2562 9.4625 12.1562 9.7125 12.0938C9.9625 12.0312 10.225 12 10.5 12ZM9.1125 14.4375L17.4562 16.4625C17.5687 16.4875 17.6813 16.4875 17.7938 16.4625C17.9062 16.4375 18.0125 16.3875 18.1125 16.3125L20.7188 14.1375C20.5813 13.95 20.4062 13.797 20.1937 13.6785C19.9812 13.56 19.75 13.5005 19.5 13.5H10.5C10.175 13.5 9.89075 13.5845 9.64725 13.7535C9.40375 13.9225 9.2255 14.1505 9.1125 14.4375Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-4">
                            N{{ $balance }}
                        </h1>
                        <p class="ml-4 dm-sans-medium text-[12px] text-[#22222299]">
                            Total Deposit
                        </p>
                    </div>

                    <div class="bg-[#DCFCE7] w-full h-[138px] shadow-lg mt-7 rounded-xl">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-4 mt-4">
                            <circle cx="15.5" cy="15" r="15" fill="#3CD856" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.0144 8.25C13.3205 8.25 11.7774 8.8095 10.8643 9.26663C10.7818 9.30788 10.7049 9.34837 10.6333 9.38737C10.4915 9.46463 10.3708 9.53663 10.2748 9.6L11.3135 11.1293L11.8025 11.3239C13.7135 12.288 16.2763 12.288 18.1877 11.3239L18.7427 11.0359L19.7248 9.6C19.5214 9.46727 19.3098 9.34741 19.0914 9.24112C18.1828 8.78887 16.6764 8.25 15.0148 8.25M12.599 9.981C12.2312 9.91217 11.8679 9.821 11.5112 9.708C12.3665 9.32812 13.6412 8.925 15.0148 8.925C15.9662 8.925 16.8658 9.1185 17.6098 9.36375C16.7379 9.48638 15.8075 9.6945 14.921 9.95062C14.2235 10.1524 13.4083 10.1306 12.599 9.981ZM18.584 11.88L18.4918 11.9265C16.3895 12.987 13.601 12.987 11.4988 11.9265L11.4114 11.8822C8.25278 15.3476 5.84153 21.7489 15.0144 21.7489C24.1873 21.7489 21.7175 15.2288 18.584 11.88ZM14.6248 15C14.4259 15 14.2351 15.079 14.0944 15.2197C13.9538 15.3603 13.8748 15.5511 13.8748 15.75C13.8748 15.9489 13.9538 16.1397 14.0944 16.2803C14.2351 16.421 14.4259 16.5 14.6248 16.5V15ZM15.3748 14.25V13.875H14.6248V14.25C14.227 14.25 13.8454 14.408 13.5641 14.6893C13.2828 14.9706 13.1248 15.3522 13.1248 15.75C13.1248 16.1478 13.2828 16.5294 13.5641 16.8107C13.8454 17.092 14.227 17.25 14.6248 17.25V18.75C14.2985 18.75 14.0207 18.5419 13.9172 18.2501C13.9018 18.2024 13.877 18.1582 13.8443 18.1202C13.8116 18.0822 13.7716 18.0512 13.7266 18.0289C13.6817 18.0067 13.6328 17.9937 13.5827 17.9906C13.5327 17.9876 13.4825 17.9947 13.4352 18.0114C13.388 18.0281 13.3445 18.0541 13.3075 18.0879C13.2704 18.1217 13.2405 18.1626 13.2196 18.2081C13.1986 18.2536 13.187 18.3029 13.1854 18.353C13.1838 18.4032 13.1922 18.4531 13.2103 18.4999C13.3137 18.7924 13.5053 19.0456 13.7586 19.2247C14.0119 19.4038 14.3145 19.5 14.6248 19.5V19.875H15.3748V19.5C15.7726 19.5 16.1541 19.342 16.4354 19.0607C16.7167 18.7794 16.8748 18.3978 16.8748 18C16.8748 17.6022 16.7167 17.2206 16.4354 16.9393C16.1541 16.658 15.7726 16.5 15.3748 16.5V15C15.701 15 15.9789 15.2081 16.0824 15.4999C16.0978 15.5476 16.1225 15.5918 16.1553 15.6298C16.188 15.6678 16.228 15.6988 16.2729 15.7211C16.3178 15.7433 16.3668 15.7563 16.4168 15.7594C16.4669 15.7624 16.517 15.7553 16.5643 15.7386C16.6116 15.7219 16.655 15.6959 16.6921 15.6621C16.7291 15.6283 16.759 15.5874 16.78 15.5419C16.801 15.4964 16.8126 15.4471 16.8142 15.397C16.8158 15.3468 16.8073 15.2969 16.7893 15.2501C16.6858 14.9576 16.4943 14.7044 16.241 14.5253C15.9876 14.3462 15.685 14.25 15.3748 14.25ZM15.3748 17.25V18.75C15.5737 18.75 15.7645 18.671 15.9051 18.5303C16.0458 18.3897 16.1248 18.1989 16.1248 18C16.1248 17.8011 16.0458 17.6103 15.9051 17.4697C15.7645 17.329 15.5737 17.25 15.3748 17.25Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-4">
                            N{{ $amount_spent }}
                        </h1>
                        <p class="ml-4 dm-sans-medium text-[12px] text-[#22222299]">
                            Total Debit
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div
            class="flex flex-col bg-[#DF5C0C] w-full lg:w-[30%] lg:h-[292.24px] shadow-xl rounded-xl justify-center items-center mb-4">
            <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" class="items-center mt-6 w-[43px] h-[41px]">
                <rect width="43" height="41" fill="url(#pattern0_42_3076)" />
                <defs>
                    <pattern id="pattern0_42_3076" patternContentUnits="objectBoundingBox" width="1"
                        height="1">
                        <use xlink:href="#image0_42_3076" transform="scale(0.0100775 0.0105691)" />
                    </pattern>
                    <image id="image0_42_3076" width="300" height="94"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABeCAYAAACZ4CkLAAAAAXNSR0IArs4c6QAAIABJREFUeF7tXXfcLFWRPdVhHhhQgiIYVxQBieaABEEJkoMoGVxAUEF3zawBdcWAu0ZwRUkiAoIIKEEElChBYVkJKypgQERWUBF406F2Tk/PTE9Ph9s9Pd/3vff6/n7vn/fdvre6uud0Vd2qU4IFNFR1BQTBqyG6AaDrA7IOgDPFdj+5gMRsRWk10GpgnjQg87RvtK2qLo8g2AqC1wK6MYCNMuT5sNjux+dTznbvVgOtBhaGBuYFsFS7r0BoHQiEewCyQokqPiq2e9TCUFcrRauBVgPzqYE5BSwNuocAcgSAtSvcdGthVVBWO7XVwNKsgZkDlqo+AaF/KIB3Ali9hjJbC6uG0tpLWg0sjRqYGWCpqoPQe2tPaR8FZOUplNc4YKnqaoC/BqAeENwvsvxdU8jXXtpqoNXAHGlgJoClvr8dJDwGkBc0cB9TA5Z63uawsCUUm0CwHoAnZch1OyCXIdTvi+te1IDc7RKtBloNNKyBRgFLVR+H0DsBkD2ml1MfhMj1CHCMuO6Pqq6nqoLAOwCCowF5arXr9Tao9XHY9pkiEla7tp3daqDVwKw00BhgqXY3RGh9B9Dn1RT2F4BcCQ2vh603iCy6teY6UF28FkLrDADr110juk5xDWxnNxH541TrtBe3Gmg10IgGGgEs9bv7Q+TE6hLJXYB+DZZzgojcX/36yStUvU0R4twct6/GFvog1NpLHOfCGhe3l7QaaDXQoAamBiwNvE8AOLKSTIKLEeDT4rqXV7quZLL63X0hcnKTaw7XUtlRHOe8mazdLtpqoNWAkQamAiwN/BMAPcBoJ04SvRyCD4p0fmp8jeFE9bsHQOQEg+n3QXADFLcAWA6CdaCyJqBrlF4bYmtx3YtL57UTWg20GpiJBmoDlobeBVBsYyjVP6B6hDidbxjOrzRNfX8/iJ5UctH7YTmnisgfsuap6ioIg08AekjBOg/D8tYWedzvKwnYTm410GqgEQ1UBixVfTzU/z4UmxlJoLgKtr+PyPJ3G82vOKkcrORuWOHuIp0bTZaODg8COR6Cl2TOF1wslru1yVrtnFYDrQaa1UAlwFLVJyLwfwjBKwzECAD8OyznqFmlBqjf3Qcip+TKwliZRKd8DxvIO5wSgXLoXw1gg8zrQmwhrntZlTXbua0GWg1Mr4FqgBV2L4HKlgbb/hEW9hBxrzSYW2uK+v6eEP0mACtngZtgORuLyCN1NlDVVRH6tMqeMXG94PtiudvXWbe9ptVAq4H6GjAGLA0Wfxaw3l2+lf4vLHeLvFhR+fXlM9T3947BKmeyngbLPaguWA0WVV38QoRyLSBPnNjICp4vstyvyqVtZ7QaaDXQlAaMAEt9f0eIfq90U8VPYDs7iMjfSufWnFBqWQnOgjh7NOWGFgD1+8R2P1PzNtrLWg20GqihgVLAUn1sDYQ2UwAeV7i+4Dyx3B1ryGB8yVyDFQVTz9sCFiZLgwRni+XuZix8O7HVQKuBqTVQDli+dxUEry4Bq3Mhzq4iwkD7TIb6/q4QPTM3ZiU4D+Ls3JRlNXILtYPQp8W4aPzG9Hdid541k5ttF2010GogUwOFgKVB9+09apgvlYDVD8Ryt5ulftX33wTRb+fuIThHLHeXWcmgYfcyqGw+sb7lrCgiD81q33bdVgOtBsY1kAtYqvpshP5txa4gc5zsjWb5o1Xf3wOipxeA1bliuTvN8sFq0D0VkL0mAStYQ2S538xy73btVgOtBkYayAes0DsHiiIgWAwrfInIol/MSqGxG0jWBTvHPrwI4mw3S1eU+2rofReKnTMsrKeKyJ9ndf/tuq0GWg0YWFiq3msQ4opiZekRYne+OCuFqu+/EaIEq+whuEAs9w2z2j+5rgbe/wBYN7XXA2K7T5mL/ds9Wg20GuhrYMLCUlULIX+gUU/AvHGr2G76B9yYTg0sq8sgztYi4jW2acFCGniPTQTdVa8Qp7PpXOzf7rHsaUAD74OAHDi68/ALYneK48nLgJomAcuskJiq+YjY7sea1pH6/m4Q/U6+ZaU/grjbiwhBZCZDA+8oWM6nRORR9bzXw0IGQ4McJ7Zz2EwEaBdd5jWgQfc/AHlXQhEz+b0taYqeBKyge4cxF7viOtjh/iKL7mjixg3A6lKIy5jV7MAq9M7uUc/sAtUrYLvbQP3zoWz0mh56ePvFa+Kpt2tkaaAFrOz3Ygyw1PO2hoUazJp6Kiw9WmQRTxVrjXKwAt1AgtWjtTYwuEhD7ywodk1MvSmnGzVgOU8XkXsNlp3VlHcAY7IeD+Bbs9psCVv3IwCSaSifBfCDJekeWsAyAazQ+yEUr6v9YAXnQMKPiCxikNp4aNA9GJD/yr2gX/KzbdXaQNXHno/Q3h2QZ0F0VUCfAMWfAdIx622w3O8NqJkzwKpI/s+I7b7P+AZnM5HxjLcnlibr6ydns9UStyoTjHdPSH1Qr4j960vSXbSAVQJYqo88A6H7u4KHSstmebOHLsfCso8sy89S1eUQBl8ElC9U9lBcCTsKsBuzLkS5W9DDIXhVqbyKq2Hpo4YsFExy+Bss9zki8mDp2rOd0AJWvn5bwJrtuzdvqw9dQg289/SSRIuKeT8G6AOAmKYyPALoeVDr27DtK9M/cPX9nSDh5wF5dgFY/RS2s6WI/MNEQ6qL10NgHVdaSmSyWP6cD4jtfmq6JRq5ugWsFrAaeZGWpEVGgOV7N+SybAJ+HLO5X7W7AUJh5vlaFW/0dqj+GSJPi1vWP6HwesW1sJ3Xm5LvGZURVRQ4c7rlPFtEftvEUlOu0QJWC1hTvkJL3uURYJW6gxmEdXG3nCMAFANPHZ1Ep4+RZWXEFKqB/7VCt7KODPnX3ALL2bTM3W12y8zVWsBqAWsOXrOFtUUfsILuYYB8Jd81033F6ZDdc2yo6pMQ+ocC+FcAqzRya4LzIc6exmAVeuSXn5OM9+H9KeiqkqTQOK7WiG7GF2kBqwWsGbxWC3vJAWB9C5A9c0T1YDkrFQGIqi6P0PtnAO8B5JlT3HKl5DiDzj3/AJRNVX8KC9cB7i3A4tUROGtBwj0BYX1gMc9X3s1YeI2Ie9UU9zrtpXMJWNQR26Dx0IXu8H3TCj/j6+cl6K6qTwU8vv8B4N5pGnvN0sXSdkoYndjDXgXw/zhNQ5oBYN2dG/wWXCSWa9rOC+r728DSA6Ag5/lyRi9mlA4RvNeUcjg6XVRaVrJFwfo3wwp2L1pTVVdEGBwFKHOazIfK9uI43ze/YOqZGwNgw9rkeB6Apyf+464YTIo22wrAYgNpXhCnTLD0iJxfT8q45te9PDCmr7BxbRkbLTsQHZNa4/3Rh6TeYBjirPj9WhkAQeIeAIOTW5aVJes8fwngjwVb8QQ8esc18I6G4pXDuba+T6RzXSaosMOSyoehsn5OX8u/AiCN9mWwnC+JSNEp/NgWZYClvvfj4QWWemJ16qcjpW5OdfFaCKyvDv9b5LYqVR2xAbM/VPaAYE0Aq2Xo714ofg3IceI4udRRGnoXIoyzEywEoqqrIfSLEiArWT0DwaLOM4H3Roj1Yog+Gxq9+DwRdAG5FxLeDcUFsNyzy4LYUestuL+ilWcGVuExYi/iqafRiPO1WGi9UekFKjuI45xfOq/ZCbQEv9vAkvyhF5247gHgbQBeU3EvgsXXemGBLwPIo8cmwCddd/6QXwigW3EvTmf4osmyKLr2j48AKx1iUNlWHGcsmbpPveR9ssAryb6lKNyBo0Xca8vuuQiwVNVF6Cf15ontdsrWNP27avdlCGUE0orrxXFfXna9qq6OMPgAEO6X2Qchf4GfIcS7xXVHIBzP1cBjHDt6NhzSTy/Qc3LXmueWVqqL10ZoXQvFrczHgvrnFfZEVHmzOE4+f1bOjarqSgh9vkj8ImQNHyq7zANYUZZZAxYtKLZL26HspSz5O608VgqwQiA9ngqAlk7SWmMG+nsr7vniHvDdkCjcDws6J5kubQxY6ncPhMi0DYE/LLb78SLhljTAUvU2RRhZvVPEsvV0sTtvTuplErDK8q8s54mmAXDTt8N0XmSahhZpbgbmPU3sLPekv6TKXuI4p5mun56nqk9H6F2d4x6/W2z3c4UvmT72XIT2vrlzrOBUU7c3tcYsXUK6ayw2f06G3AQxunzsdP0nANT/PwFYFYi40mjlTHYUAuhi09pKj717sbDk4Q0ptZnce73hMyMv2s0pqh9+nNIuR32XsMDCUr97AEROmJRVfwuR26G4vQ+kuhqU1RUF/TsFZ0Oc/fLiXEsSYGnQfRcgzOF0DJ9j/rQU1XkvP5QewSDOHIgG/vGAMmCeMeRusR2+oHM+VB99DkLnmhz/Ny1PAJXdxHHKYiml96G+/2aIZoBeOTtDbA3m11OqHiBO56RSIcwmNBF0pzVJAEhXMBwbNcEFymol6WIStFi7lz68yCuHmcY1pDX26YR67ozBK+1W1g6657mE6nf3hQjBuz8UN0LwbVjOaSKSewgRccsF+EwmeBX0t1xSAEuD7tsAyfo4mb3FmbAz6nw1CVgM3gmyeZ0El4jlvr7+zvWu7Hde9m43PnFUeZM4Tj7ZXwUx4q7PD0weGOg9YneyrJDROxxxiflFjThqxQNzxJ8WsHgg8jMASd4z0j0zjsUGslUGg960xjZLXMQvI9dOJ9nWdQ3Z0JYuZRJc2YE8KyDeJGC9AbZ9K0L/7tGDrm7Ja9B9JyD/OalUPUzsznHp/18SAEv1sechtHnwYna4VuWNgr5N7M6xGRZWN/+EEHKs2A6DsHM+NPCY25U+WZqZZZVcWH3v2swvohWuXUalo4F/F6A5wCbfENvJsWYrq3hawGKx+cGJXQlWL4rdvsrCxDGly1KgRQuZAXzGmZJjnxjgBv9n4hpeBICnnINBKzDv3WwSsLaF0P1V6upPsHR7kQ5jaJVHvzGvfW7qRPExWMGGIsv979g7WMCHtRCC7v064KgzOg9O6g66kQwtZMWNfy+2+8ysGNb9qSPg5OYfFNs9uq40016ngfeBYgaCiHHh5U3H2DToZuelGVhy6ntX5xZdN9u7cRrAYtu2ZA4ZrSHGsqblNWPA9edxmsHg8bN349kZ70IV15BWX/Ig5Q9xaVheJURzgAV9KyA84n8UVvhSkUW3TvNeaz/OyT6fw5MvCH4sljvWlWmhW1gaeGn3vJpaVA8Wp3O8qj4NoX95dqmfHgoIjZbEKWHQ/VvBEeS8F/qWWlr9Mp7Nm+TJinJxAOYJpYa+Q+xOob+uoXcxFNlutOAysdyi3LEqD30awOIpV4J+N7JUaLE0MdjyLZn2wZSAbTMWznIN+cVN0/YwTsZYFWtQB4P6vaRA2AYBS34dWUQ1T5+zZMzsV2B5zxR5HA83orHwAat7awmNeuLW5etQXAjbu0lkeZ4kj40o4Tb0aZ2nrDW9p5enxQOeocspmXzlo+XeK7bLo+d5HT0ZCR75ll4NCpqiG9LA4w8nK4/r38R2GYzOHYW8Wob5LIbKrgtYfPiM0Q2+WjzS5ylsU2VGPMljJ6EVB7+9HhcV409ZAXyeqI4C2VGG+MSpIeM7b03ohGBEi6toNAhYkbPbeCs5DTy6gElXaOwUeiEDVkyAwMOaksE2gLqXiMvQQOFQ1ZUR+j8pcTF5SuhpwUqlR/llgjT1dwNL66q4YNokk7tYeWH3kmx+LD1E7A4TJPMBK/BPBHT/nAlNNu+oC1jp+BEtxmqZ/uUPNS0b9ZEEpuQKRa4hM86vTuRcMa2CJUL/N6eApbJzEyfQSZk16NLdSVq1N4ntMoYYjQUNWPkf9L7wgu9FWeyWc5SI/L38dYnvOcqFZAa/rJd3DQGLC+YxLpQmuJkK08S8UtCSiEaZzKRTgZYG3QcBefKEzCrbieMUUu1q0D0ZkLxcrIUAWKRSTgb+6cI1TR+cBkWWFX0o5x3Icg2ZuvBvANjzkmVCg3FAL1/MJC2kQQtLH4LlPkVE/Cbe4SEgqT4Foc/48WhYjjvYZ0EDVnGc9jtiuW+sq6s4nWnCbRysR8CiqZ5V68M5C4EKeHjvcWLnfwPC+rHsIbgE4uxQt1FFv7zAZ1B3cljOqgNK5bztddDEImuC4kZx3JfWfZip6+paWIwpbZ1Yi4DAdIEmB2NWSRBkwHwsgzm1WRrgeKrI+rJkt+0f9awt03q55gCrIFdqWoVp4P8G0FGeoxU8f5BYvKABK+gytsRSu9TQb8Fy9xGRIq8tV21RDWLgX1aQcBu5hHxZn5/z65+3tIYJVURA4l1TyFA6hOHI0qrVt1AD7/O9IlryfI0Pw/hTYdC92V6GdQGLVssguMmY0aI+u0Cjg/lRyXo5Hn+XAXXaNUwKxOJk5nSNcqGKxW0OsCBfEdtJcuc3pqiJdyXE5oN6uoUNWBlhJMHZYrk8Ea49NOieAgg/XrmDgMWXifVZGUNPFruTF4+pLVjVC/tWjyFYjUCLbexpaRk3W42YJkQvyJHvyF6BaWmTB/W9ayCJav/kYoLzxXKnrdcbrFgXsB5KlDcxQ7vI8qn6qAbz+fVNxqz4UUy6dlnrZrmGg3nv7pUAFZZFpRZsELAws4OnifQZlX3EcU7lvSxUwFLVVRH6GZn9ej+s4BVZp4CmL5GG3pm9muFk85D0pYFo6F2a3XcvKj/4iThuMnvZdO/G5vXdwOCq/GTMIjg2B4jYFfzvnOLNh2E5zxURnn4VDg08Hk0naV8S8+V4sZ1ksmbZckV/rwNYPBk0YnGdRrCMa5mblfNRHJvNDwJz75KD176sohXYHGCp7CGOw/UaHxp0vwDI4YmFh2lECxewuhshFD6TjCG/gWW/sixskqdIDbonAbJfkaJZS/hfcRZvxjy9v1c2wDyIeRkxWF055uePSaLMIftCQUDX6Eha+wFQFlnn8dQbfWVV1Ubo06KbaFAbi32U2O5HG1JmHcBivV+SXoaulmnh8TRiM0mVQfSiwbgkj/rT8Ul+RJjUWiXo3SRg1WL/MFGWBh5Ldd6ZmDu04hcwYL0coeTzmKnsWcRvVaQX9b0rIMXURnQJ/6XQ3LacFeeDv9zADfwrLN1cpHNTaQFmvwJ8FxGZiNWo6ioI/SvzwUp/C8tdw+SUKK6tYpJj9lA9SJxOU/3x6gAW5Uq6hEwPmIIOxORnaTyHtYh58YujeqtUAfrmAAt4j9huWYmY8U0mJ07EbBLF8fMLWN4mCMGcqP5IxG9VF6+L0MrpO6qHit0ZEf9V0Er8O+RhVxGvV0A+rG0hmn+sbeHVJolfFWQrnWoAVg/D0k0IVkOdBh6PzT+Wu3iKtiJ6DhHjqM+kthzLSv8OSzcWWcRSitKhvr89RM/LnWhhExGX4NjEqAtYLC1JFjzTTWwqabTufTH7n6eAg0F5kuwP/NAwaJ/Fs5W1Z5OA9Xmx3XfVvbGi6zT0ftADg1EVQIitxHV/GL2bBbWE/b+PB77FdvOs+sqiq+/vCNER84niOnFcHqTwN5MXw3qX2B0eWNUaGvjsT1qaDyilVgHwfrHdJKVHLYFMLzIAq0diy2rCldFg8WcBiwHa7CEJ2grVFRB6VxUkqXVhYTMTdsjBZhp4BMy8fCO2tyc3flMNWOsCFn8QyfQAgvVY4a3ps2poHtkXCKJJGiPm8TDnKknNTa6p9Q1dw+YASzBVXlEhYAUeKZNZBdAfVrjuoFbRALDGmDhhOU8SkTy210qPaoL3K3VC3uO/+isgK4wWDT8h9qL8975kd/X9HSBR74XSEXO6e0k3YfwiwYViuVm1YKWLV53QbzfWYcwqj8blkV4ziW1EXMabMocGXvLYPmOOng7LPQyhzy/6MLN4YmIN3vaJL+b4oveJ7eblu1VVFefXBSwS0BEMBoNJpNMyaKblJ9/86IcIMEEyjycsXQZ1cZwnxlNDgtRKicUZlD/SQFnNARb0/2C5zL9rNPUjpuUez39LfNAMACsFdg67kZOqeuqhgcdGwaOazjRgTSSOyq9hdTdL1kKaCqHafRFCoddh1AymD1ihdy40lx6XJ2Qr1E0GMxc8Iuyj4MkXffzyErpmDfwvA2pAh6MPZWayD3bL4PEuu4+Y8oOlI2kyvP6lDeSppGSoC1g8hUlmi5NHe4wpoOxeDf5O6zeZd0XLkyR/6cF8MAbVWX/IwQoFgt2gCJgpF0kyRSaU0jUpo3dpELAiJtvageQ8XfVcOuojGZf7pdjuMPXDALAYR1p3uH6IrcV1CfZTjwnGkQkLy6PcqefJWG+wWdW0BtVH/wmhQ2ojozHompNDLhavYWHTIqvGaKeSSXEzV77oWVZIF/0HQhqKzNFQM1UPIbYV103GU4xuTz1vK1ggZ1OehIeL3SHINDX+o8ddlYytmAammShKuuMB1TSzktkcxLijS8kNPLcXPGdHneTYBEA6dkeQ4vNOWrlMaeDXPTnYb4CcSYPBtRmDK2pe8a1e9n6ybZ0xG8UE42h/15+J7fKksrGhgcdcpsQJvI7FgEoBazJn6dNiuxkMI9VEjpkT2GHIGl6ZBizNTW24F1awichy6ecfLcWYcTIkUkwtky133Pm5uyFCKQhoNko8l/+T7jMYMgiebNHkI8R2RV+PhsBqcbxPZbCKHkZZ92krWCtN0lbtVZqYnY6X8fSRtMQmI53NX1TrZ7Jecg6B88OJ/2B2ehbNdpqgkXE0Wgzp9AW6hDx5TbqGZc0r0uSEpq4kvY3ze/THrK/sD9UrIELANUocNlGWBh5jwsnmG+z9uUoyBlUKWEGXPF1JptJ7xXZz8v9MpIpvd9Ly4ynhMOg+VEvgka02K6RyX9/SShMS+l8CwtfBctk1/U/9lKWIByunyibaifletDpHfFgjAboP5Nfo6d9iP/4x81uvN1N18ToIhcHwPj2Jyk7iOLkBOQ38YwESfeUM0UtL+hf2LwzxujqWVUJ/2QXT0QS5S2yHlkeTg4cLSeofWnem/SNJa5IOtJMmOzc2aCj4hrEllSymZ1lLuqt4Ft0xm1Hktb+ihZXs7ESrkG2n8lxD6iV5+MKUicKExOFznGxC8SZI+NUohGDpi0U6OUmTZhrKrqbQb4rdGSuYLwWszNO6cSvNTKLRrLjw+H/6zYdlVMeZBVi+vzdEJ7rBx6vdB8t/1cA9HL8Xxrt0H4RyKqDFvwmVXeI9sgCLCKj5NVMNEpiVKVIjkxOXQq2DxHGy2Cr7WFYas+qfXmjgMYCYdjUSTwpXiuPyK1pr5DeuGCxXrU+ioRDs8Zds5sqEULp2ZdQrg+WZsJjkGOd1G/SstOzC73KhWI5DFy+ZaMygOUEs7b4x1pIkOSSDRFkFADn7kywAdDtokWV9RElOmDxIoPtFK6/0gztpYckbIEowPRLQBxHKHuK6ReSBuZpSz9sMVlQUngww/7nXyGLNdK5jGWD13//uqWPAwv+0dCORjgFX1biYEeVx4P+414BlTViyUyoPa8LC6u/v0Svj880Y+jtY7qsR+szzTCbHlr9J/Rl3iu2uOcHpPvyyaLc4g3UGfnyR5KrKY1oGsbPVUWZZAf8utjvMri4FLehpYneS7ACmiuWDS5OxjV/bwJc5Qxh+dVgqlAzyF/GcZ91POsWBzB0kx0vSJ5vogdYZAYJcVcnBwHu6oQV1HNXLxYNAyUA7T6qLBl1CAiBPDweDrm1WjhRdoyF7ZzyZgWK6q4Ujq2sObPsGhD6baQx0/TlYzkerUHPnUgrnBMuNAEu7r0Aoaav0L1B5R5V2d3GlBz8ibCT8YVh6sUkj1ajBcWEoKWoLl9+WrxgA9hWn880JTvfkNRr4dwLKlyd7WHiNiFv1ZS57Ryr/vYRziv5dZufnYj4tPUXsjpHbMK6ziVhC+n5uEdul5TKLcWKPwSBdnM5TPzbp5BE3AYjlN3mD1hDTQNLZ7gQC/is7JmfTVDKzZnUFPiTuBp3cmy8vLaNk+Q17FTJIbjLo8iaL0+kasskFSf7SI02jw7/zWjLX0oqkbiZ40zIA6w3iOBeo79PSSli0+veIgM9yvigime3Q4oMk3h/ZP5IUz7Gs+UwQJoDFRXL7DwguhDj7igjZZTNHv5TMYyyM8dCVetTe18B2Xgt4G5gAVrS/7+8F0eQHyOQ5lswZtdQrASyPwdL8r1CzbAO1bqwuWA02ywat+kXJJXxijMHtLY5j+oOsqpO141Zd2akUk6vxBDZdac84AuWLMplTg+DHLy9PFfkj52EIXQAWMvNrPEly2G+2yhO6LNYLplMkPwp1UirSJ4AEVSa/pt09spXy4zo67SrWLudpUav6uLsx7yuVMyR3QfS2qDs56XoEq0NBvRYVfH9KbDdd6D2U0BSw+qDhXQeJCsSzxk2A/gKQWxDiFog8BaJs8voyqG46ihXjxrg3wsOq3ZcglFF8MCOGldxIfX+3uJenW/UFzpif9ozGG6mObdyvq0uavpPrWfpykc5cFMxO7F0OVjAqLh4HLfmy2E5pSUDWg8gvUxjOfrjXLTqrM3IDz3W4BOlq6I6Z1ARmARYXYooBfzz8YE3z0jEIy9O/LFYLuo0EqMGgdUPAzWWXzFESM6x5aph0DfNcYQaySQFt8gyogzDPwhp+8Po/ZsbccmI3ZY9W70coe5fFwSoBFonv1P82FDuW7Z7z91/Ccsiy8JcIALX7MlMLa6SXxeshtGjxm7ByZInxCKD/InaHJ7wJ4PbGMvon6o8yKsjTizdJ82us39i85glNMuUheX2lY+c4prWy2G7yeNlYnuGDKuTE19vE7kzTt81UHsazGNyke1b041wdAHNs8gYbojI1gtnvpln5rPsjUDGAn1fiw9wvxp+S6Q0ER7qudUbaNeQaG+e4hjxtZn4SaVyKGn6yzXqQAViZtNhR3p3gyDJ2gcRPj7r5Ciz3JBOe8yqANXwX/e6BEOtD5lRMchcQfg6We6KIDOtJVbsvRSgjo6TEwhoDGNYhWnp4LmXV5NOmRX4SLOeTWbQ0hS5hH10LKIJHm5V2j6nzFpZdo/rYmghtxivS1sS8Ncspz/2HAAAIQUlEQVQoBXgrXE9kEeNEczH4o+NJIUubCA4EqKRLRNYBUz4snsgRBHj6x3UYUGfgmwmmdA95EsVUCp6YlRVP0xpJJn+yzIWxpCqUMWn98VSRcg0GXUN+4fMGWQCoF+qH7hpjSskPdpR1PgFYIbYR181NCO6XltCdttaChhtAonrHKJUFgnugehdCubDMokoLrb6/E0RHXHQhuIZRJrv6/s6QcOdesfiO4zV/0S4/B+RmKM7Pa6wRY8Do1Fb191VZRlQfewFC+82ArgkVuqDU+WqA/haKuyF6PdT+cXmPhBILK3pohRxZsWoThZpz8UscfkX6oMV8ocHx+byBVaSr8sJNIzd1LnXY7pWvAVMLa0nRYZS5ju7TAHFFOkz2XKJGzxPiodHAMn44k5Ki3yPMu6ugwSpv+k5YzgZNNjA11WTcPZegReqPmXAVmcsSUdQwZjOoh0tfGuWTmK7XzptfDSxtgDW/2pxud1UVhD7rRwfjjlwOHQ26hwGSzlBOSSAniu0kOwhPJ2GFq1X1yfNBLJgloobeRVBslSv+PFmjFdTZTo010ALWwnkVVB9bA6H9q6FEgksKSb/U926ARPS0BTa0HixOh6cmy+zQKNgpRRQtH+0RrJUmLS6zClxAN94C1sJ5GOr7u0L0rJFE8o1iwMqvyh6/K5UdxXHymTYXjg5mIknMXBodCeeMO8R2eYTfjgWugRawzB7QBCup4AKxXJaLNTY08I8HdNT0V/XAUlrVXhfkI3qFn2XUp90+lXCnjKeosZtZaAsV9iOksFb4QpFFeSR2C+12lll5WsAyf/S9ciOeDo+SlvuME6a1rIUbqeoTEXp/GIujk5fPRDwNve+VJ6WR/1y2nmv+dxP552KO+t1/hkQJhXmjdQvn4kFMuUcLWOYK1MD/CqCHja7QU8XuFDZCNV1dA4+HaUxC7o+YANMMsFSfgDAg7UQedfFg2cVQ2bUst8JU6CVpXuwWFp0WzkvC7ZKkw4UgawtY5k9BVZ+F0GdtKPP/+qOBUrSY1WKcrFNlNzK3GAFWJEfEU2WRXM+g+rp+ux9zdS28mRp6P4SONXgYF9IK1xZZdMfCk7yVaPh7m+TDysx0bzUW41Pgf6OXDDqeKZBoV1ZVT3FdImtOhxxYLMoWx31139CqMOKUfeY/FZU4DKD2NFjuW0SklIOogggLeqoG3YMBGauFSgn8EbHd/FZkC/rulg3hWgur2nPu9xMk+6iwIiIx9BRY7ttNypCGH4vASzck4Z/+Cstbd9DgohJgRZZWWR/DcanvgBXuuqwEm1V1JYR+UdBxllQz1d60dnamBlrAqv5iqHY3iAg3Iemu3axbPZWkhSLuqDFrEtZUV0PovwWQAzM7vKe6V1UGrBi0docoO5MYjun6lhlusiCmadi9BCpb5gpjBS8QWW68vdOCkLwVInq3W5ew1osQ0yuTLyyv2P+RXmcukhcEDHRFNDdQlgz1qdAnB4kI9xPHSbLqVnMJxww+z3s9rIhn26ifWFTKE+JQcd1La2lkRhdFXwe4v2/sONbvHgSRrxWI+yGxXTZ9aMcC1EALWPUfSkSzHHaPBCyyhpCho94QXBSTD07QFNWysAZSqHqvRKgXFPb4mxT5ZqgcM0NSOyMlqS5eH6H1nV7fu36dH1vZh3IGbPvCaboz9336qLYwb7RuodETmp9JLWBNr/d+ra/F/E0G45MNSQoWV4ZSToGFM0Q61+VNnAqwuKjq4rUR2hcYpDykZSCtLClmjxsQh02vqvIVoo67ah9T0DiW4HUJQj0TtntmnfbfGnZ/VNipp3ULyx/UPM1QXbwefGsUi3GcW+by/Zyn257Jtqr6eATBVhB9EQQbIozBy9IQSl42/Q1U7oEtvzTtezo1YPVBS58I9U+BjnEeVVCCnAhLTwac62ZxqqjMIwuCTWDpW6DYpYJgBK8fINQzYLvnmDYd0KB7CCBfLdjng2K75INqR6uBVgMVNNAIYA3267Xkoe/Ko8lpxs0Am7qGN8JikM69uSqIRad1QbAlBJsB4caArDeNQMNrI7dRz4Ltnp1kaEyvXeoWil4uVue1jcjULtJqYBnSQKOA1be2uhsikOMgmU0N6qr2FgjuhepDgPUQEDwAWIui2JnoioA+GSorAbpyfLRq6DfXFSe609Oh1ll5fRM19C4toIl9QGw3j+p5GqHaa1sNLNUaaBywhtaW390fIrS2lvYfJsnzvwu1Tk+WJGngpdvBj71IPbqZmel+qX5j25tbpjUw0x8Nm6Ei9Nl1mQ0ARqn2S63K2avOOhvQewF9RwFj68/Fdut2F1lqtdfeWKuBMg3MFLCG1lY/A5zdad6+MIFLfwcIO8bM0ZBjxXbeNkebtdu0GlhqNDAngJUCLnYqZrvyF82vFvXBiOfLco5ld9x+Z1/sDIS7Vswrq34bqlEb7uoXtle0Gli2NTCngJVUdb8NkOwNWGx3PndsnIqfAPJ1cZzc9toaZfHL7gBbJU3UR037xrBp5UZFp4zTbtBe32pgadXAvAHWOHjps3sV39tDZKv4ZM203MfkudwB6E0AroXlnpHVrLFokT43jxK4dq/QXDR/ybYhhckza+e0GsjUwIIArLRkqovXQmCv0yuwXgfQF0LlGRA8GVB2NV4hLphkv7K/APoX9GlZWSz5ABDcD7V/BTu8FXB/UTWHqxC81HsVQibHErxKyQwnl1J5kzjOGe272Gqg1UA9DSxIwKp3K3N7Vb/jr+wGgC5tWd/BP8DS7UQ67JbcjlYDrQZqaqAFrJqKG3dpo0LqXaDYAhK1d+8P0cvZEhyWe3Jbj9aAotsllnkN/D875UUgh2+x6AAAAABJRU5ErkJggg==" />
                </defs>
            </svg>
            <p class="dm-sans-medium lg:text-[16px] text-[18px] text-[#ffffff] text-center p-2">
                TextPlug
            </p>
            <p class="dm-sans-medium lg:text-[14px] text-[16px] text-[#ffffff] text-center p-2">
                Need a new number for <br />verification?
            </p>
            <a href="/user/orders">
                <button
                    class="px-16 py-3 mt-2 dm-sans-medium rounded-lg text-[#DF5C0C] text-[12px] bg-[#ffffff] text-center mb-6">
                    Buy Now
                </button>
            </a>
        </div> --}}
    </div>

    <div class="flex flex-col bg-white w-full lg:w-[80%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History
            </h1>

            <form action="/admin/wallet" method="GET" class="flex flex-col md:flex-row">
                <div class="flex relative ml-5 lg:ml-0 mt-[40px]">
                    <input type="text" name="search" placeholder="Search" value="{{ request('search') }}"
                        class="bg-[#F9FBFF] text-[#22222280] dm-sans-regular text-[12px] rounded-lg w-[216px] h-[38px] pl-11 relative" />
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="m-2 W-[24px] h-[24px] absolute">
                        <path
                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                            stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.9999 21L16.6499 16.65" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div class="flex ml-5">
                    <select name="sort" onchange="this.form.submit()"
                        class="dm-sans-regular text-[12px] text-[#7E7E7E] rounded-lg h-[38px] w-[154px] pl-[14px] mr-[50px] mt-[40px] bg-[#F9FBFF] hover:border-[#F9FBFF]">
                        <option value="newest">Sort by : Newest</option>
                        <option value="oldest">Sort by : Oldest</option>
                        <option value="recent">Sort by : Recent</option>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" ,>
                            <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </select>
                </div>
            </form>
        </div>

        <table class="min-w-full mt-8">
            <thead>
                <tr class="border-b border-gray-300">
                    {{-- <th class="px-8 py-5 pl-6 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Transaction ID
                    </th> --}}
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Email
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Purpose
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Order Date
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Amount
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        <td class="px-8 py-5 whitespace-nowrap">{{ $transaction->user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ $transaction->type == 'credit' ? 'Account Funding' : 'Purchased Number' }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($transaction->updated_at)->format('jS F, Y') }}</td>
                        <td
                            class="px-8 py-5 whitespace-nowrap {{ $transaction->type == 'credit' ? 'text-[#00B087]' : 'text-[#DF5C0C]' }}">
                            {{ $transaction->type == 'credit' ? '+' : '-' }}{{ $transaction->amount }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-dashboard>