<x-admin-dashboard page="dashboard">
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Dashboard</h1>
            <p class="montserrat-thin font-thin text-[24px]">Overview of your account and campaigns</p>

            <div class="flex flex-col items-center justify-start my-5 lg:flex-row gap-6">
                <div class="flex-col flex rounded-lg px-6 py-4 max-w-[400px] w-full border border-[#6683A5] gap-4">
                    <div>
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="44" height="44" fill="url(#pattern0_563_447)" />
                            <defs>
                                <pattern id="pattern0_563_447" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_447" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_447" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEeUlEQVR4nO2dS4gcZRDHP42PqBfRHIMi3nziCxQS9aIEDOilq1oTFA8GRTDiReLBQchO1WYT1qghRCI+8CBevYm5qAdPPg4KoqIRgyDRTKZqdkk0afkmGxlnN9ndmZ6ub6brB99tl63+/7vqe2x3dQiO4ziO4ziO4ziO4ziLKA5su1in4XZleDKOuWZ2T/FhtmbxTzqlEQXWJj4ojG8pw1/KWPQOIfxdGJ4vGvddVN5frTlFo3Fhm7MNSrA3Ctwv+lJDCD4q9mSXWcc+1gjnNwoDC8GRlYi+yASGt62vYezoTOd3CsGMMB4eRPT+0Sa41/qakkd25bcIw5QS/FiG6H2l6D3r60uS+ZnsOiV8UQm+K1v0vjL0k/W1JkNrF16vhC8pwTejFL0vA06GOtPhLeuFcLsyfi6Ep6sSvneEutHe/ei6DuE2S9FrZ0BrT3aVEjwe19/C+Le16LUw4Njsw1f+JzrBSWuha2OAULZ14U4/YS1uLQ3QBEQdawOKma1XzM08dm2Hsju0mW+SadginD8nDK8o4T5l+EAZDp3r960FTdqAeAAlnD8gjC/0ihnX3sL4mzDMDxu4JiBqcgZ019uM+5WxNerANQFRkzJAKH9WGaWqwDUBUZMwIJ6TK8OrVQeuCYiahAHK0LAIXBMQ1dwAIbxfGE65AWhkAMMXVneO1j0D4t1vGbjW3YBRTrzqBiyPMHzpBqBlBuAfbgAazgEjXv2ozwHLZoDp5KUJTKyrGfH5olIzwA3AVRoQKwa8UTSeWOsGsGE2EHxS7N10qWcAW5qA+9wAtpwP4JRwdrPPAWxail53A9jQAMZv3QA2LEOEc24AWxoA6gawl6Bl75QwITvhJcZrngFsuAydgpvcAB7TJaifBeEw4n9cNLJLhjbAj6Nx1WUn1v1SzoEWMsD/IcMrN6A9ld0QykQIv6qiXoZz3wA29bvk6xgYJZx1A9DOAH8sBW0zIBJfgPMShHYGtKdxoxD+43MA2hgQUcKX3QC0M6AowgWxsYWvgtDGgLN0mtnTStj2ZSjaGBCZ4+yaeM6hDMd9H4DVG3CWorH58jPvDnTfF/ONGBu9pqoEt7oBWH0G/K93g2dAYWZARBg7ozhDEW9VsDKU4ftRHmId82YdyxpwqKpTxJa3q1mMEL5TlQG9HG8+crU3bOoaADstDOil1i3LujvkhAJvxaZ9DDuE8etaNO1Tzh9KyQCLtpWxF2mwYtjNWKi6cSvjD6VnAOO7wYo4GY6DAUu2Lib4pQwDYtPvYMkwm7Ew7s27CQ5aX8NQm7GQCGPdvn6YzVhI9AMO3ZZsBAeV8M8lhD/SZnwmmQ84DLMZC4kTRVbKb+s2HSTM4udMYraElBh0MyaEp61jnwiUs6cGzICj1rFPBJ0m3DWQAQSfWsc+EcSaKAw/D1CCtlvHPjGc+c7WKsRnPJzEEm5SiM8PKeH7KxMf5jsMd1vHPJlfnSOcPd+RsDD86uJXcEAnhG/Gg6+FPtJHlfGzWPPjIy3BcRzHcRzHcRzHcZxQL/4FTO+Is5sl4I4AAAAASUVORK5CYII=" />
                            </defs>
                        </svg>
                    </div>
                    <h3 class="font-semibold montserrat-bold text-[20px]">Active Campaigns</h3>
                    <h2 class="font-semibold montserrat-bold text-[20px]">{{ $campaigns }}</h2>
                </div>

                <div class="flex-col flex rounded-lg px-6 py-4 max-w-[400px] w-full border border-[#6683A5] gap-4">
                    <div>
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="44" height="44" fill="url(#pattern0_563_462)" />
                            <defs>
                                <pattern id="pattern0_563_462" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_462" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_462" width="96" height="96"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <h3 class="font-semibold montserrat-bold text-[20px]">Account Balance</h3>
                    <h2 class="font-semibold montserrat-bold text-[20px]">₦{{ $balance }}</h2>
                </div>

                <div class="flex-col flex rounded-lg px-6 py-4 max-w-[400px] w-full border border-[#6683A5] gap-4">
                    <div>
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="44" height="44" fill="url(#pattern0_563_452)" />
                            <defs>
                                <pattern id="pattern0_563_452" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_452" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_452" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEBklEQVR4nO2cS4hcVRCGT0QjPtCFoPjc6doHLjUrIZgs3NyqK5ONGrJKRgj4QIQGM+mqTuJC4nOlS0X3uhTicxXdZBVXKhqI0Z6qnqCgJ9weQXHsdI/ec+ucvvXBD8MwcM5f/32dqXNvCI7jOI7jOI7jOI7jOE5viYO91yrha8r4izLGf0oYfleGH5XwY2V4djx87CbrOS8VQvjmvxV+loRAhfFwHAyusJ578TRFFMKN7QTwl+DdONh1pbWHHgeAsbl0WXvo3SVo6z2ifsTaQ9HEl6trlOCkEv78H0P4xNrDUhPfOnDVZAgPNoWeFcIGV3dZz3PpOT9YuUEYv5txQ37Cen69QBlP/J/7hfZEQvCtMBxt/SlRhojW5rQgCcFaqwGMh3iPtSktSELwfevrBmUUa2Najs6HthGCTzMwFgvRqdYDUIZXMzAWixDByQQB4FPmxrgQUfVk6wFMqHrA3BgXIqrvaz2A+Mruq4XgN3NznLeaGjW1CilQgq+tDWrmEsavQiqE8B1rg5q5hOHtlAE8bW1QM5dwvZosgPVRtcvaoGaudYKH0/5nlPAPa5OaqZraXODqxpASYfjG2qjmKoKzITXK+IG5Uc5UBO+nD4DgRXOjnKkIX0gfANd7zI1yphrCo8kDmIzq28yNcqZaW7k1dMF0y6K1Wc5MBOdCVwjhR+aGOS8Jw4fdBcDA1oY1MwnhsLsAvEkft54BFXQWgDfpcUsA49Hjd3cWwLRJT7hufdprPpLOt+1fbstiD3Wq0+JvBuBNek3ZhJ8fgDfpNWUTfm4AI7g/g1M/Lm0Tfh5xUO0Uxl/NzfMSN+Hn4U16TNuEn4c36TFtE36BAHrfpJeUTfh5NA1o62uwGmt9hA+ZBdD3Jr100YSfR6+b9NRBE34evW7SUwdN+AUCeL6/AeBz1vXv94r4WHWvdf1DjGHH7PeIl/uV1BjDjpADSvhM7wJgPBxy4dygur5POyWE8Id4fN91ISd0WO/uw5pAGo8j3BtypNkZsPQBMB4JOSMELy1v8eFYKAEhrJThgnXBtDXBeEJ4IJTExhG8UxjfEIaLBR/xF5Xh9Qmv3BFKRY7WtyjBfiV8TwnOKOFP1oWdqWZum3Ns5rpfju+72bp+juM4jpPm2xNcrwrDF9PPIk8/jTz9+VCKbR5dj5c1k7Xq9mY7x8zHP8LTzd+UOl7WxOmROLsYfy9KG0dm1+Nlj3C9uvhCCA+WNl72COGXCxeE8PPSxsse3d7XF6W08bJHt1UQGJc2XvaIX4KsA4BDnd6EOx4ve+L04394eqHHwkG1s7TximDSLIwuU5QkC7EOxyuCuPmGzcHm0e/PG6UI42fN71IciV2P5ziO4ziO4ziO4ziO44TecgkTf9qm/MCf+wAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>

                    </div>
                    <h3 class="font-semibold montserrat-bold text-[20px]">Total Orders</h3>
                    <h2 class="font-semibold montserrat-bold text-[20px]">{{ $orders }}</h2>
                </div>

                <div class="flex-col flex rounded-lg px-6 py-4 max-w-[400px] w-full border border-[#6683A5] gap-4">
                    <div>
                        <i class="fa fa-user text-4xl text-[#F48857]" aria-hidden="true"></i>
                    </div>
                    <h3 class="font-semibold montserrat-bold text-[20px]">Total Users</h3>
                    <h2 class="font-semibold montserrat-bold text-[20px]">{{ $users }}</h2>
                </div>
            </div>
        </main>
    </div>
</x-admin-dashboard>
