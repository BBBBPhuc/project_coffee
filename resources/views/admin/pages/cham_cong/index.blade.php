@extends('admin.shares.master')
@section('noi_dung')
    <div id="app">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <template v-for="i in 5">
                            <tr>
                                <template v-for="j in 7">
                                    <template v-for="(v, k) in listDate">
                                        <template v-if="k == ((i - 1) * 7 + j - 1)">
                                            <template v-if="v < currDate">
                                                <template v-if="currMonth == changeMonth">
                                                    <td style="height: 100px" class="text-center align-middle">
                                                        <i class="fa-solid fa-user-check"></i>
                                                        @{{ v }}/@{{ month }}
                                                    </td>
                                                </template>
                                                <template v-else>
                                                    <td style="height: 100px" class="text-center align-middle">
                                                        @{{ v }}/@{{ month }}
                                                    </td>
                                                </template>
                                            </template>
                                            <template v-else-if="v == currDate">
                                                <td id="beatCheck" v-on:mouseleave="beat()" v-on:mouseenter="beat()" style="height: 100px" class="text-center align-middle">
                                                    <i class="fa-solid fa-flag-checkered"></i>
                                                    @{{ v }}/@{{ month }}
                                                </td>
                                            </template>
                                            <template v-else-if="v > currDate">
                                                <td style="height: 100px" class="text-center align-middle">
                                                    @{{ v }}/@{{ month}}
                                                </td>
                                            </template>
                                        </template>
                                    </template>
                                </template>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex mb-3">
                    <div v-on:click="prevMonth()" class="p-2"><button class="btn btn-primary">Previous</button></div>
                    <div v-on:click="nextMonth()" class="ms-auto p-2"><button class="btn btn-primary">Next</button></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                listDate: [],
                month: 0,
                is_beat: false,
                is_next: false,
                is_prev: false,
                currDate: 0,
                currMonth: 0,
                changeMonth: 0,
            },
            created() {
                this.loadData();
            },
            methods: {
                beat() {
                    var beatCheck = document.getElementById('beatCheck');
                    if (!this.is_beat) {
                        beatCheck.classList.add('fa-beat');
                        this.is_beat = true;
                    } else {
                        beatCheck.classList.remove('fa-beat');
                        this.is_beat = false;
                    }
                },
                loadData() {
                    if (this.is_next) {
                        if (this.month == 12) {
                            this.month = 1;
                            this.changeMonth = this.month;
                        } else {
                            this.month++;
                            this.changeMonth = this.month;
                        }
                    } else if (this.is_prev) {
                        if (this.month == 1) {
                            this.month = 12;
                            this.changeMonth = this.month;
                        } else {
                            this.month--;
                            this.changeMonth = this.month;
                        }
                    } else {
                        var date = new Date();
                        this.month = date.getMonth() + 1;
                        this.currMonth = date.getMonth() + 1;
                        this.changeMonth = this.currMonth;
                        var yearCurr = date.getFullYear();
                        this.currDate = date.getDate();
                    }
                    var dayLastMonth = 0;
                    if (this.month == 1 || this.month == 3 || this.month == 5 || this.month == 7 || this.month ==
                        8 ||
                        this.month == 10 || this.month == 12) {
                        dayLastMonth = 31;
                    } else if (this.month == 4 || this.month == 6 || this.month == 9 || this.month == 11) {
                        dayLastMonth = 30;
                    } else {
                        if (yearCurr % 4 == 0 && yearCurr % 100 != 0) {
                            dayLastMonth = 29;
                        } else {
                            dayLastMonth = 28;
                        }
                    }
                    this.listDate = [];
                    for (let i = 0; i < dayLastMonth; i++) {
                        this.listDate[i] = i + 1;
                    }
                    this.is_next = false;
                    this.is_prev = false;
                },
                nextMonth() {
                    this.is_next = true;
                    this.loadData();
                },
                prevMonth() {
                    this.is_prev = true;
                    this.loadData();
                }
            },
        });
    </script>
@endsection
