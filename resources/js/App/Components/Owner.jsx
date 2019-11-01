import React from 'react';


export default class App extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
          data:[],
          // conditional rendering
        //   isLoading: false,
          loading: false,
          loaded: false,
        };

        this.url = 'https://classes.codingbootcamp.cz/assets/classes/998/clients.json';
    }

    componentDidMount() {
        this.loadData();
    }

    loadData() {
        if (this.url) {
            this.setState({
                loading: true,
                loaded: false,
                data: []
            })

            fetch(this.url)
                .then(response => response.json())
                .then(data => {
                        this.setState({
                        loaded: true,
                        data: data
                    })
                })
                .finally(this.setState({
                    loading: false
                }));
        }
    }



    render() {

        let show = 'Loading';
        if (this.state.data.length > 0 ){
            show = this.state.data.map((oneData)=>{
                return <div key={oneData.first_name}>{oneData.name}
                            <img src={oneData.image.url}></img>
                        </div>

            });
        }



    }
}
