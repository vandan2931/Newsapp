import React, { Component } from 'react';
import NewsItem from './NewsItem';
import Spinner from './Spinner';
import PropTypes from 'prop-types';
import './News.css';

export class News extends Component {
    static defaultProps = {
        country: 'us',
        pageSize: 9,
        category: 'general'
    };

    static propTypes = {
        country: PropTypes.string,
        pageSize: PropTypes.number,
        category: PropTypes.string
    };

    constructor() {
        super();
        this.state = {
            articles: [],
            loading: false,
            page: 1,
            totalResults: 0,
            error: null
        };
    }

    async componentDidMount() {
        this.fetchNews();
    }

    async fetchNews() {
        const { country, category, pageSize } = this.props;
        const { page } = this.state;
        
        this.setState({ loading: true, error: null });
        
        try {
            let url = `https://newsapi.org/v2/top-headlines?country=${country}&category=${category}&apiKey=1aca4e487f564a62b6bb3980ee9b0f99&page=${page}&pageSize=${pageSize}`;
            let response = await fetch(url);
            
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            let parsedData = await response.json();
            
            if (!parsedData.articles || !Array.isArray(parsedData.articles)) {
                throw new Error("Invalid data format from API");
            }

            this.setState({ 
                articles: parsedData.articles, 
                totalResults: parsedData.totalResults || 0, 
                loading: false 
            });
        } catch (error) {
            console.error("Error fetching news:", error);
            this.setState({ 
                loading: false, 
                error: "Failed to load news. Please try again later." 
            });
        }
    }

    handleNextClick = async () => {
        this.setState(prevState => ({ 
            page: prevState.page + 1 
        }), this.fetchNews);
    };

    handlePreviousClick = async () => {
        this.setState(prevState => ({ 
            page: prevState.page - 1 
        }), this.fetchNews);
    };

    render() {
        const { articles, loading, page, totalResults, error } = this.state;
        const { pageSize } = this.props;

        return (
            <div className='container my-4'>
                <h1 className="text-center mb-4">Latest News</h1>
                {loading && <Spinner />}
                {error && (
                    <div className="alert alert-danger text-center">
                        {error}
                    </div>
                )}
                <div className="row">
                    {!loading && !error && articles.map((element, index) => (
                        <div className="col-md-4 my-4" key={index}>
                            <NewsItem
                                title={element.title ? `${element.title.slice(0, 45)}...` : ""}
                                description={element.description ? `${element.description.slice(0, 70)}...` : ""}
                                imageUrl={element.urlToImage || "./blank.jpg"}
                                newsUrl={element.url}
                            />
                        </div>
                    ))}
                </div>
                {!error && (
                    <div className="container">
                        <div className="d-flex justify-content-between">
                            <button
                                disabled={page <= 1}
                                type="button"
                                className="btn btn-info"
                                onClick={this.handlePreviousClick}
                            >
                                &larr; Previous
                            </button>
                            <button
                                disabled={page + 1 > Math.ceil(totalResults / pageSize)}
                                type="button"
                                className="btn btn-success"
                                onClick={this.handleNextClick}
                            >
                                Next &rarr;
                            </button>
                        </div>
                    </div>
                )}
            </div>
        );
    }
}

export default News;