<style>
.content_view {
    margin: 20px;
    zoom: .7;
}

::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: #888;
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
}

th.dt-center,
td.dt-center {
    text-align: center;
}

table.dataTable thead tr {
    background-color: var(--tertiary);
    font-weight: 100;
    height: 50px;
    color: var(--primary);
}

table.dataTable tbody tr {
    width: 100%;
    text-transform: uppercase;
    min-height: 70px !important;
}

.subs_header {
    display: flex;
}

.subs_header>h3 {
    font-size: 3.25em;
    color: var(--tertiary);
    margin: 5px auto;
}

.exportBtn {
    width: 100px;
    padding: 5px;
    font-weight: 600;
    font-size: .8em;
    margin: auto 40px auto 0;
    border-radius: 4px;
}

.subs_header>button {
    position: absolute;
    right: 20px;
    padding: 5px;
    font-weight: 600;
    font-size: 1em;
    border-radius: 4px;
    margin-top: 20px;
    width: 209px;
}


div.dataTables_filter>label>input {
    outline: none;
    border: 2px solid var(--fontDark) !important;
    transition: .3s ease-in;
    margin-bottom: 18px;
}

div.dataTables_filter>label>input:hover,
div.dataTables_filter>label>input:focus {
    outline: none;
    border: 2px solid var(--secondary) !important;
    transition: .3s ease-in;
}

table.dataTable tbody tr:hover {
    background-color: var(--fontDark);
}

table.dataTable tbody tr:hover>.sorting_1 {
    background-color: var(--fontDark);
}

.stats_div {
    width: 100px;
    padding: 9px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.stats_div>i {
    margin-right: 5px;
    font-size: 1.1em;
}

.inac {
    color: var(--red);
}

.ac {
    color: green;
}
.sett{
    font-size:1.5em;
    color: var(--secondary);
    cursor: pointer;
    transition: .3s all ease-in;
}

.sett:hover{
    color: var(--tertiary);
    transition: .3s all ease-out;
}
.opt_list{
    position: absolute;
    display: none;
    flex-direction: column;
    background-color: var(--shadow);
    list-style-type: none;
    color: var(--primary);
    padding: 7px 0 ;
    margin-top: -5px;
    right: 5px;
    border-radius: 4px;
}
.opt_list > li{
    font-size: .9em;
    text-transform: capitalize;
    text-decoration: none;
    margin: 0;
    width: 116px;
    padding: 5px 0;
    cursor: pointer;
}
.opt_list > li:hover{
    background-color: var(--fontDark);
    color: var(--secondary);
}
/* .vieW3418, */
 .viewOpt{
    display: flex;
}
.del:hover{
    background-color: firebrick !important;
    color: var(--primary) !important;
}
</style>